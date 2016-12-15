@extends('layouts.master')


@section('title')
    Edit Technology Area
@stop


@section('content')
<div class="container">

<h1>Edit Technology Area</h1>

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

  <form method='POST' action='/technologies/{{ $technology->id }}'>
      {{ csrf_field() }}
      {{ method_field('PUT') }}

      <div class="row">
          <div class="col-xs-6">
            <h3>Name and Description</h3>
            <blockquote>
                  <div class="row">
                      <input type='text' size="47" name='name' value="{{ old('name', $technology->name) }}" id="name">
                  </div>
                  <div class="row">
                      <br>
                      <textarea rows="6" cols="50" name='description' id="description">{{ old('description', $technology->description) }}</textarea>
                  </div>
            </blockquote>
          </div>
          <div class="col-xs-6">
            <h3>Partners</h3>

            @foreach($partners_for_checkbox as $partner_id => $partner_name)
                <input
                    type='checkbox'
                    value='{{ $partner_id }}'
                    name='partners[]'
                    {{ (in_array($partner_name, $partners_for_this_technology)) ? 'CHECKED' : '' }}
                >
                {{ $partner_name }} <br>
            @endforeach


          </div>
        </div>

    <div class="col-xs-12" align='right'>
      <input type='submit' value='Save Changes'>
    </div>
  </form>
</div>



</div>
@stop
