@extends('layouts.master')


@section('title')
    Add New Technology Area
@stop


@section('content')
<div class="container">

<h1>Add New Technology Area</h1>

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

  <form method='POST' action='/technologies'>
      {{ csrf_field() }}


      <div class="row">
          <div class="col-xs-6">
            <h3>Name and Description</h3>
            <blockquote>
                  <div class="row">
                      <input type='text' size="47" name='name' value="{{ old('name', 'Hype Technology') }}" id="name">
                  </div>
                  <div class="row">
                      <br>
                      <textarea rows="6" cols="50" name='description' id="description">{{ old('description', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Traditur, inquit, ab Epicuro ratio neglegendi doloris. At ille non pertimuit saneque fidenter: Istis quidem ipsis verbis, inquit; An vero, inquit, quisquam potest probare, quod perceptfum, quod.') }}</textarea>
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
                    >
                    {{ $partner_name }} <br>
                @endforeach

          </div>
        </div>

    <div class="col-xs-12" align='right'>
      <input type='submit' value='Add New Technology Area'>
    </div>
  </form>
</div>



</div>
@stop
