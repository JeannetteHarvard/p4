@extends('layouts.master')


@section('title')
    Show Partner
@stop


@section('content')
<div class="container">

  @if( ! empty($partner) )

<!-- <h1><b>{{ $partner->name }}</b></h1> -->
<img src="/images/logos/{{ $partner->logo_url }}" alt="{{ $partner->name }}" width="200">

  <div class="container">
        <div class="col-xs-6">
          <br>
          <p><a target=_blank href='{{ $partner->url }}'>{{ $partner->url }}</a></p>

          <div class="row">
              <div class="col-lg-3"><b>Company Name:</b></div>
              <div class="col-lg-9">{{ $partner->name }}</div>
          </div>
          <div class="row">
              <div class="col-lg-3"><b>Year founded:</b></div>
              <div class="col-lg-9">{{ $partner->founded_year }}</div>
          </div>
          <div class="row">
              <div class="col-lg-3"><b>Headquarters:</b></div>
              <div class="col-lg-9">{{ $partner->headquarters_city }}, {{ $partner->headquarters_country }}</div>
          </div>
          <div class="row">
              <div class="col-lg-3"><b>Revenue:</b></div>
              <div class="col-lg-9">{{ $partner->annual_revenue }}</div>
          </div>
          <div class="row">
              <div class="col-lg-3"><b>Employees:</b></div>
              <div class="col-lg-9">{{ $partner->number_of_employees }}</div>
          </div>

          <br>
              <p>{{ $partner->description }}</p>
        </div>
        <div class="col-xs-6">
              <h4>Partnership with {{ config('constants.company_name') }}</h4>
              <br>

              <div class="row">
                  <div class="col-lg-3"><b>Partner Portal:</b></div>
                  <div class="col-lg-9"><a target=_blank href='{{ $partner->partner_portal_url }}'>{{ $partner->partner_portal_url }}</a></div>
              </div>
              <div class="row">
                  <div class="col-lg-3"><b>Training Portal:</b></div>
                  <div class="col-lg-9"><a target=_blank href='{{ $partner->training_portal_url }}'>{{ $partner->training_portal_url }}</a></div>
              </div>
              <br>
              <div class="row">
                  <div class="col-lg-3"><b>Partner Agreements:</b></div>
                  <div class="col-lg-9">{{ $partner->partner_agreements }}</div>
              </div>
              <br>
              <div class="row">
                  <div class="col-lg-3"><b>Partner Tier:</b></div>
                  <div class="col-lg-9">{{ $partner->partner_tier }}</div>
              </div>

        </div>
</div>

<br>


<div class="col-xs-12">
  <div class="col-lg-6">
        <a href="{{ route('partners.edit', $partner->id) }}"><b>Edit Partner</b></a>
  </div>
  <div class="col-lg-6"  align='right'>
        <form method='POST' action='/partners/{{ $partner->id }}'>
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <input type='hidden' name='id' value='{{ $partner->id }}'>
            <input type='submit' value='Delete Partner' class="btn btn-danger">
        </form>
  </div>
</div>
  @else
      <h1>no such partner</h1>
  @endif




</div>
@stop
