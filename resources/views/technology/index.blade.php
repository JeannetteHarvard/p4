@extends('layouts.master')


@section('title')
    All Technology Areas
@stop


@section('content')
<div class="container">

    <h1>All Technology Areas</h1>

@if ($technologies->count() > 0)
<table class="table table-hover">
    <thead>
      <tr>
        <th width="15%">Technology</th>
        <th width="60%">Description</th>
        <th width="25%">Partners</th>
      </tr>
    </thead>

    @foreach ($technologies as $technology)
    <tbody>
      <tr>
        <td><b><a href="{{ route('technologies.show', $technology->id) }}">{{ $technology->name }}</a></b></td>
        <td>
          @if (!empty($technology->description))
              {{ $technology->description }}
          @endif
          &nbsp;
        </td>
        <td>
              @foreach ($technology->partners as $key=>$partner)
                        <a href="{{ route('partners.show', $partner->id) }}">{{ $partner->name }}</a>
                        @if(($key+1) != $technology->partners->count())
                            |
                        @endif
              @endforeach
        </td>
      </tr>
    </tbody>
    @endforeach
  </table>
@else
    No technologies
@endif

<br>
<a href="{{ route('technologies.create') }}"><b>Add a New Technology Area</b></a>

</div>
@stop
