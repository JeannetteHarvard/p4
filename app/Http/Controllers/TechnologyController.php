<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Technology;
use App\Partner;
use Session;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $technologies = Technology::orderBy('name', 'asc')->get();

      return view('technology.index')->with('technologies', $technologies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        # Get all the possible partners so we can include them with checkboxes in the view
        $partners_for_checkbox = Partner::getPartnersForCheckboxes();

        return view('technology.create')->with('partners_for_checkbox', $partners_for_checkbox);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      # Validate the request data
      $this->validate($request, [
          'name' => 'required|min:2|max:50',
          'description' => 'required|min:50',
      ]);
      # If the code makes it here, you can assume the validation passed

      $technology = new Technology();
      $technology->name = $request->name;
      $technology->description = $request->description;

      // adding tagged partners

      # If there were partners selected...
      if($request->partners) {
          $partners = $request->partners;
      }
      # If there were no partners selected (i.e. no partners in the request)
      # default to an empty array of partners
      else {
          $partners = [];
      }

      # Above if/else could be condensed down to this: $tags = ($request->tags) ?: [];

      $technology->save();
      # Sync partners
      $technology->partners()->sync($partners);



      Session::flash('flash_message','New Technology was added');

      return \Redirect::route('technologies.show', array($technology->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $technology = technology::find($id);

      if(is_null($technology)) {
          Session::flash('flash_message_red', 'Technology not found');
          return redirect('/technologies');
      }

      return view('technology.show')->with('technology', $technology);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $technology = Technology::find($id);

      if(is_null($technology)) {
          Session::flash('flash_message_red', 'Technology not found');
          return redirect('/technologies');
      }

      # Get all the possible partners so we can include them with checkboxes in the view
      $partners_for_checkbox = Partner::getPartnersForCheckboxes();

      # Create a simple array of just the partner names for partners associated with this technology;
       # will be used in the view to decide which partners should be checked off
       $partners_for_this_technology = [];
       foreach($technology->partners as $partner) {
           $partners_for_this_technology[] = $partner->name;
       }

      return view('technology.edit')->with([
        'technology' => $technology,
        'partners_for_checkbox' => $partners_for_checkbox,
        'partners_for_this_technology' => $partners_for_this_technology
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      # Validate the request data
      $this->validate($request, [
          'name' => 'required|min:2|max:50',
          'description' => 'required|min:50',
      ]);
      # If the code makes it here, you can assume the validation passed

      $technology = Technology::find($id);
      $technology->name = $request->name;
      $technology->description = $request->description;

      // adding tagged partners
      # If there were partners selected...
      if($request->partners) {
          $partners = $request->partners;
      }
      # If there were no partners selected (i.e. no partners in the request)
      # default to an empty array of partners
      else {
          $partners = [];
      }
      # Above if/else could be condensed down to this: $tags = ($request->tags) ?: [];

      $technology->save();
      # Sync partners
      $technology->partners()->sync($partners);

      Session::flash('flash_message','Technology Area was updated');

      return \Redirect::route('technologies.show', array($technology->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $technology = Technology::find($id);

      if(is_null($technology)) {
          Session::flash('flash_message_red', 'Technology Area not found');
          return redirect('/technologies');
      }

      $name = $technology->name;
      $technology->delete();


      // Session::flash('flash_message','Partner ' + $name + ' deleted');
      Session::flash('flash_message','Technology Area '.$name.' deleted');
      return redirect('/technologies');

    }
}
