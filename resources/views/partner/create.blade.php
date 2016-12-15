@extends('layouts.master')


@section('title')
    Add New Partner
@stop


@section('content')
<div class="container">

<h1>Add New Partner</h1>

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

  <form method='POST' action='/partners'>
      {{ csrf_field() }}

      <div class="col-xs-6">

        <div class="row">
            <div class="col-lg-4"><label for="name">Company Name</label></div>
            <div class="col-lg-8"><input type='text' name='name' value="{{ old('name', 'ACME Inc.') }}" id="name"></div>
        </div>

        <div class="row">
            <div class="col-lg-4"><label for="url">URL</label></div>
            <div class="col-lg-8"><input type='text' name='url' value="{{ old('url', 'http://partner.com') }}" id="url"></div>
        </div>

        <div class="row">
            <div class="col-lg-4"><label for="logo_url">Logo URL</label></div>
            <div class="col-lg-8"><input type='text' name='logo_url' value="{{ old('logo_url', 'default_logo.jpg') }}" id="logo_url"></div>
        </div>


        <div class="row">
            <div class="col-lg-4"><label for="founded_year">Year Founded</label></div>
            <div class="col-lg-8"><input type='text' name='founded_year' value="{{ old('founded_year', 2000) }}" id="founded_year"></div>
        </div>
        <div class="row">
            <div class="col-lg-4"><label for="headquarters_city">Headquarters</label></div>
            <div class="col-lg-8"><input type='text' name='headquarters_city' value="{{ old('headquarters_city', 'City') }}" id="headquarters_city">
            <input type='text' name='headquarters_country' value="{{ old('headquarters_country', 'Country') }}" id="headquarters_country"></div>
        </div>
        <div class="row">
            <div class="col-lg-4"><label for="annual_revenue">Annual Revenue</label></div>
            <div class="col-lg-8"><input type='text' name='annual_revenue' value="{{ old('annual_revenue', 'US 5 billion (2016)') }}" id="annual_revenue"></div>
        </div>
        <div class="row">
            <div class="col-lg-4"><label for="number_of_employees">Number of Employees</label></div>
            <div class="col-lg-8"><input type='text' name='number_of_employees' value="{{ old('number_of_employees', 1000) }}" id="number_of_employees"></div>
        </div>

        <div class="row">
          <div class="col-lg-12">
              <label for="description">Company Description</label>
              <br>
              <textarea rows="7" cols="50" name='description' id="description">{{ old('description', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam vellem, inquit, te ad Stoicos inclinavisses! erat enim, si cuiusquam, certe tuum nihil praeter virtutem in bonis ducere. Duo Reges: constructio interrete. Quae si potest singula consolando levare, universa quo modo sustinebit?') }}</textarea>
          </div>

        </div>


      </div>
      <div class="col-xs-6">
            <h4>Partnership with {{ config('constants.company_name') }}</h4>

            <div class="row">
                <div class="col-lg-4"><label for="partner_portal_url">Partner Portal</label></div>
                <div class="col-lg-8"><input type='text' name='partner_portal_url' value="{{ old('partner_portal_url', 'http://partnerportal.com') }}" id="partner_portal_url"></div>
            </div>
            <div class="row">
                <div class="col-lg-4"><label for="training_portal_url">Training Portal</label></div>
                <div class="col-lg-8"><input type='text' name='training_portal_url' value="{{ old('training_portal_url', 'http://trainingportal.com') }}" id="training_portal_url"></div>
            </div>
            <div class="row">
                <div class="col-lg-4"><label for="partner_agreements">Partner Agreements</label></div>
                <div class="col-lg-8"><textarea rows="5" cols="40" name='partner_agreements' id="partner_agreements">{{ old('partner_agreements', 'Global Agreements, Local Agreements, NDAs, etc.') }}</textarea></div>
            </div>
            <div class="row">
                <div class="col-lg-4"><label for="partner_tier">Partner Tier</label></div>
                <div class="col-lg-8"><input type='text' name='partner_tier' value="{{ old('partner_tier', 'The highest :)') }}" id="partner_tier"></div>
            </div>

            <div class="row">
                <div class="col-lg-4"><label for="partner_tier">Technology Areas:</label></div>
                <div class="col-lg-8">
                      @foreach($technologies_for_checkbox as $technology_id => $technology_name)
                          <input
                              type='checkbox'
                              value='{{ $technology_id }}'
                              name='technologies[]'
                          >
                          {{ $technology_name }} <br>
                      @endforeach
                </div>
            </div>


      </div>

    <div class="col-xs-12" align='right'>
      <input type='submit' value='Add New Partner'>
    </div>
  </form>
</div>



</div>
@stop
