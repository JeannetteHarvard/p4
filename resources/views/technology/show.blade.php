@extends('layouts.master')


@section('title')
    Technology: {{ $technology->name }}
@stop


@section('content')
<div class="container">

@if( ! empty($technology) )

    <h1><b>{{ $technology->name }}</b></h1>

    <div class="row">
        <div class="col-xs-6">
          <h3>Description</h3>
          <blockquote>{{ $technology->description }}</blockquote>
        </div>
        <div class="col-xs-6">
          <h3>Partners</h3>
          <blockquote>

            @foreach ($technology->partners as $key=>$partner)
                      <a href="{{ route('partners.show', $partner->id) }}"><img class="img-responsive" src="/images/logos/{{ $partner->logo_url }}" alt="{{ $partner->name }}" style="max-height:100px; max-width:200px; vertical-align:middle"></a>

                      @if($partner->logo_url == "default_logo.jpg")
                          <br><b><a href="{{ route('partners.show', $partner->id) }}">{{ $partner->name }}</a></b><br>
                      @endif

                      @if(($key+1) != $technology->partners->count())
                          <br>
                      @endif
            @endforeach


          </blockquote>
        </div>
      </div>

<div class="col-xs-12">
  <div class="col-lg-6">
        <a href="{{ route('technologies.edit', $technology->id) }}"><b>Edit Technology Area</b></a>
  </div>
  <div class="col-lg-6"  align='right'>
        <form method='POST' action='/technologies/{{ $technology->id }}'>
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <input type='hidden' name='id' value='{{ $technology->id }}'>
            <input type='submit' value='Delete Technology Area' class="btn btn-danger">
        </form>
  </div>
</div>
@else
    <h1>no such technology</h1>
@endif




</div>
@stop
