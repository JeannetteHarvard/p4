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

  <form method='POST' action='/partners/store'>
      {{ csrf_field() }}

      <div class="col-xs-6">

        <div class="row">
            <div class="col-lg-3"><label for="url">URL</label></div>
            <div class="col-lg-9"><input type='text' name='url' value="{{ old('url', 'http://partner.com') }}" id="url"></div>
        </div>

        <div class="row">
            <div class="col-lg-3"><label for="founded_year">Year Founded</label></div>
            <div class="col-lg-9"><input type='text' name='founded_year' value="{{ old('founded_year', 2000) }}" id="founded_year"></div>
        </div>
        <div class="row">
            <div class="col-lg-3"><label for="headquarters_city">Headquarters</label></div>
            <div class="col-lg-3"><input type='text' name='headquarters_city' value="{{ old('headquarters_city', 'City') }}" id="headquarters_city"></div>&nbsp;
            <div class="col-lg-3"><input type='text' name='headquarters_country' value="{{ old('headquarters_country', 'Country') }}" id="headquarters_country"></div>
        </div>

      </div>
      <div class="col-xs-6">
            <h4>Partnership with {{ config('constants.company_name') }}</h4>

            <div class="row">
                <div class="col-lg-3"><label for="users">Number of Users</label></div>
                <div class="col-lg-9"><input type='text' name='users' value="{{ old('users') }}" id="users"></div>
            </div>

      </div>

      <input type='submit' value='Add New Partner'>
  </form>
</div>



</div>
@stop
