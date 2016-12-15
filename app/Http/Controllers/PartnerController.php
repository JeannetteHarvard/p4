<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partner;
use Session;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $partners = Partner::orderBy('name', 'asc');
        $partners = Partner::orderBy('name', 'asc')->get();
        // dump($partners);
        return view('partner.index')->with('partners', $partners);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('partner.create');
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
            'url' => 'required|url',
            'founded_year'     => 'required|numeric|min:1600|max:2050',

            'headquarters_city' => 'required|min:2',
            'headquarters_country' => 'required|min:2',

            'annual_revenue' => 'required|min:2',
            'number_of_employees'     => 'required|numeric|min:1|max:500000',

            'description' => 'required|min:100',

            'partner_portal_url' => 'required|url',
            'training_portal_url' => 'required|url',
            'partner_agreements' => 'required|min:10',
            'partner_tier' => 'required|min:10',
        ]);
        # If the code makes it here, you can assume the validation passed

        $partner = new Partner();
        $partner->name = $request->name;
        $partner->url = $request->url;
        $partner->logo_url = $request->input('logo_url', 'default_logo.jpg');
        $partner->founded_year = $request->founded_year;
        $partner->headquarters_city = $request->headquarters_city;
        $partner->headquarters_country = $request->headquarters_country;
        $partner->annual_revenue = $request->annual_revenue;
        $partner->number_of_employees = $request->number_of_employees;
        $partner->description = $request->description;

        $partner->partner_portal_url = $request->partner_portal_url;
        $partner->training_portal_url = $request->training_portal_url;
        $partner->partner_agreements = $request->partner_agreements;
        $partner->partner_tier = $request->partner_tier;

        $partner->save();

        Session::flash('flash_message','New Partner was added');
        // return redirect('/partners');
        return \Redirect::route('partners.show', array($partner->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $partner = Partner::find($id);

        if(is_null($partner)) {
            Session::flash('flash_message_red', 'Partner not found');
            return redirect('/partners');
        }

        return view('partner.show')->with('partner', $partner);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partner = Partner::find($id);

        if(is_null($partner)) {
            Session::flash('flash_message_red', 'Partner not found');
            return redirect('/partners');
        }

        return view('partner.edit')->with('partner', $partner);
        // return 'Edit a Partner by id';
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
          'url' => 'required|url',
          'founded_year'     => 'required|numeric|min:1600|max:2050',

          'headquarters_city' => 'required|min:2',
          'headquarters_country' => 'required|min:2',

          'annual_revenue' => 'required|min:2',
          'number_of_employees'     => 'required|numeric|min:1|max:500000',

          'description' => 'required|min:100',

          'partner_portal_url' => 'required|url',
          'training_portal_url' => 'required|url',
          'partner_agreements' => 'required|min:10',
          'partner_tier' => 'required|min:10',
      ]);
      # If the code makes it here, you can assume the validation passed

      $partner = Partner::find($id);
      $partner->name = $request->name;
      $partner->url = $request->url;
      $partner->logo_url = $request->input('logo_url', 'default_logo.jpg');
      $partner->founded_year = $request->founded_year;
      $partner->headquarters_city = $request->headquarters_city;
      $partner->headquarters_country = $request->headquarters_country;
      $partner->annual_revenue = $request->annual_revenue;
      $partner->number_of_employees = $request->number_of_employees;
      $partner->description = $request->description;

      $partner->partner_portal_url = $request->partner_portal_url;
      $partner->training_portal_url = $request->training_portal_url;
      $partner->partner_agreements = $request->partner_agreements;
      $partner->partner_tier = $request->partner_tier;

      $partner->save();

      Session::flash('flash_message','Partner changes were saved');
      // return redirect('/partners');
      return \Redirect::route('partners.show', array($partner->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $partner = Partner::find($id);

      if(is_null($partner)) {
          Session::flash('flash_message_red', 'Partner not found');
          return redirect('/partners');
      }

      $name = $partner->name;
      $partner->delete();

      // Session::flash('flash_message','Partner ' + $name + ' deleted');
      Session::flash('flash_message','Partner '.$name.' deleted');
      return redirect('/partners');
    }
}
