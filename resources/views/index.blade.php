@extends('layouts.master')

@section('head')
<style>
.bgimage {
  height: 200px;
}
</style>
@stop

@section('content')

<h1>Welcome to Alliances Management System!</h1>

<div class="container">
  <div class="row">
      <div class="col-xs-4">
        <h3><a href="/partners">Partners</a></h3>
        <blockquote>View all the partners and the respective information on the partner company and the alliance relationship such as agreements and their type, revenue, partner tier, etc.</blockquote>
      </div>
      <!-- <div class="col-xs-4">
        <h3><a href="/Initiative">Initiatives</a></h3>
        <blockquote>Track and manage our partner initiatives on Go-To-Market, Enablement, Solution Innovation, Marketing, their progress and the key stakeholders involved. </blockquote>
      </div> -->
      <div class="col-xs-4">
        <h3><a href="/technologies">Technology Areas</a></h3>
        <blockquote>Review the list of all technology areas which our partners are addressing with their respective solutions and value propositions.  </blockquote>
      </div>
      <div class="col-xs-4">
        <h3><a href="/contacts">Internal Teams</a></h3>
        <blockquote>Collaborate with our internal teams on partner engagements, add and edit contacts, view by SBU, geography, initiative, etc.</blockquote>
      </div>
  </div>

  <div class="row">
      <div class="col-xs-4">
        <blockquote class="linkquote"><a href="/partners">Explore <em>Partners</em> >>></a></blockquote>
      </div>
      <div class="col-xs-4">
        <blockquote class="linkquote"><a href="/technologies">Explore <em>Technology Areas</em> >>></a></blockquote>
      </div>
      <div class="col-xs-4">
        <blockquote class="linkquote"><a href="/contacts">Explore <em>Internal Teams</em> >>></a></blockquote>
      </div>
  </div>



</div>
@stop
