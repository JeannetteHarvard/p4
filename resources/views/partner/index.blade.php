@extends('layouts.master')


@section('title')
    All My Partners
@stop


@section('content')
<div class="container">

    <h1>All My Partners</h1>

    @if ($partners->count() > 0)
        <ul>
            @foreach ($partners as $partner)
            <li><a href="{{ route('partners.show', $partner->id) }}">{{ $partner->name }}</a></li>
            @endforeach
        </ul>
    @else
        <p>No partners found</p>
    @endif

<br>
<a href="{{ route('partners.create') }}"><b>Add a New Partner</b></a>

</div>
@stop
