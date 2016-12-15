@extends('layouts.master')


@section('title')
    Edit Partner
@stop


@section('content')
<div class="container">

<h1>Edit Partner</h1>

@if(count($errors) > 0)
    <div class="alert alert-danger">
      <strong>Attention! Please, re-check your input:</strong>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
  </div>
@endif

<div class="container">

  <form method='POST' action='/partners/{{ $partner->id }}'>
      {{ csrf_field() }}
      {{ method_field('PUT') }}
      <input type='hidden' name='id' value='{{ $partner->id }}'>

      <div class="col-xs-6">

        <div class="row">
            <div class="col-lg-4"><label for="name">Company Name</label></div>
            <div class="col-lg-8"><input type='text' name='name' value="{{ old('name', $partner->name) }}" id="name"></div>
        </div>

        <div class="row">
            <div class="col-lg-4"><label for="url">URL</label></div>
            <div class="col-lg-8"><input type='text' name='url' value="{{ old('url', $partner->url) }}" id="url"></div>
        </div>

        <div class="row">
            <div class="col-lg-4"><label for="logo_url">Logo URL</label></div>
            <div class="col-lg-8"><input type='text' name='logo_url' value="{{ old('logo_url', $partner->logo_url) }}" id="logo_url"></div>
        </div>

        <div class="row">
            <div class="col-lg-4"><label for="founded_year">Year Founded</label></div>
            <div class="col-lg-8"><input type='text' name='founded_year' value="{{ old('founded_year', $partner->founded_year) }}" id="founded_year"></div>
        </div>
        <div class="row">
            <div class="col-lg-4"><label for="headquarters_city">Headquarters</label></div>
            <div class="col-lg-8"><input type='text' name='headquarters_city' value="{{ old('headquarters_city', $partner->headquarters_city) }}" id="headquarters_city">
            <input type='text' name='headquarters_country' value="{{ old('headquarters_country', $partner->headquarters_country) }}" id="headquarters_country"></div>
        </div>
        <div class="row">
            <div class="col-lg-4"><label for="annual_revenue">Annual Revenue</label></div>
            <div class="col-lg-8"><input type='text' name='annual_revenue' value="{{ old('annual_revenue', $partner->annual_revenue) }}" id="annual_revenue"></div>
        </div>
        <div class="row">
            <div class="col-lg-4"><label for="number_of_employees">Number of Employees</label></div>
            <div class="col-lg-8"><input type='text' name='number_of_employees' value="{{ old('number_of_employees', $partner->number_of_employees) }}" id="number_of_employees"></div>
        </div>

        <div class="row">
          <div class="col-lg-12">
              <label for="description">Company Description</label>
              <br>
              <textarea rows="7" cols="50" name='description' id="description">{{ old('description', $partner->description) }}</textarea>
          </div>

        </div>


      </div>
      <div class="col-xs-6">
            <h4>Partnership with {{ config('constants.company_name') }}</h4>

            <div class="row">
                <div class="col-lg-4"><label for="partner_portal_url">Partner Portal</label></div>
                <div class="col-lg-8"><input type='text' name='partner_portal_url' value="{{ old('partner_portal_url', $partner->partner_portal_url) }}" id="partner_portal_url"></div>
            </div>
            <div class="row">
                <div class="col-lg-4"><label for="training_portal_url">Training Portal</label></div>
                <div class="col-lg-8"><input type='text' name='training_portal_url' value="{{ old('training_portal_url', $partner->training_portal_url) }}" id="training_portal_url"></div>
            </div>
            <div class="row">
                <div class="col-lg-4"><label for="partner_agreements">Partner Agreements</label></div>
                <div class="col-lg-8"><textarea rows="5" cols="40" name='partner_agreements' id="partner_agreements">{{ old('partner_agreements', $partner->partner_agreements) }}</textarea></div>
            </div>
            <div class="row">
                <div class="col-lg-4"><label for="partner_tier">Partner Tier</label></div>
                <div class="col-lg-8"><input type='text' name='partner_tier' value="{{ old('partner_tier', $partner->partner_tier) }}" id="partner_tier"></div>
            </div>
            <div class="row">
                <div class="col-lg-4"><label for="partner_tier">Technology Areas:</label></div>
                <div class="col-lg-8">
                      @foreach($technologies_for_checkbox as $technology_id => $technology_name)
                          <input
                              type='checkbox'
                              value='{{ $technology_id }}'
                              name='technologies[]'
                              {{ (in_array($technology_name, $technologies_for_this_partner)) ? 'CHECKED' : '' }}
                          >
                          {{ $technology_name }} <br>
                      @endforeach
                </div>
            </div>


      </div>

    <div class="col-xs-12" align='right'>
      <input type='submit' value='Save Changes'>
    </div>

  </form>
</div>



</div>
@stop
