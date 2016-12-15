@extends('layouts.master')


@section('title')
    All Internal Contacts
@stop


@section('content')
<div class="container">

    <h1>All Internal Contacts</h1>

@if ($contacts->count() > 0)
<table class="table table-hover">
    <thead>
      <tr>
        <th>Strategic Business Unit</th>
        <th>Photo</th>
        <th>Full Name</th>
        <th>Role</th>
        <th>Email</th>
        <th>Phone</th>
      </tr>
    </thead>

    @foreach ($contacts as $contact)
      <tbody>
        <tr>
          <td>{{ $contact->sbu }}</td>
          <td><img src="{{ $contact->picture_url }}"></td>
          <td>{{ $contact->first_name }} {{ $contact->last_name }}</td>
          <td>{{ $contact->role }}</td>
          <td>{{ $contact->email }}</td>
          <td>{{ $contact->phone }}</td>
        </tr>
      </tbody>
    @endforeach
  </table>
@else
    No technologies
@endif

<br>
<!-- <a href="{{ route('contacts.create') }}"><b>Add a New Contact</b></a> -->

</div>
@stop
