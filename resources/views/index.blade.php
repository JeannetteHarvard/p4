@extends('layouts.master')

@section('head')
<style>
.bgimage {
  height: 200px;
}
</style>
@stop

@section('content')

<div class="container">
  <div class="row">
      <div class="col-xs-4">
        <h3><a href="/partner">Partners</a></h3>
        <blockquote>View all the partners and the respective information on the partner company and the alliance relationship such as agreements and their type, revenue, partner tier, etc.</blockquote>
      </div>
      <div class="col-xs-4">
        <h3><a href="/random-user">Initiatives</a></h3>
        <blockquote>Track and manage our partner initiatives on Go-To-Market, Enablement, Solution Innovation, Marketing, their progress and the key stakeholders involved. </blockquote>
      </div>
      <div class="col-xs-4">
        <h3><a href="/random-user">Internal Teams</a></h3>
        <blockquote>Collaborate with our internal teams on partner engagements, add and edit contacts, view by SBU, geography, initiative, etc.</blockquote>
      </div>
  </div>

  <div class="row">
      <div class="col-xs-4">
        <blockquote class="linkquote"><a href="/partner">Explore <em>Partners</em> >>></a></blockquote>
      </div>
      <div class="col-xs-4">
        <blockquote class="linkquote"><a href="/random-user">Explore <em>Initiatives</em> >>></a></blockquote>
      </div>
      <div class="col-xs-4">
        <blockquote class="linkquote"><a href="/random-user">Explore <em>Internal Teams</em> >>></a></blockquote>
      </div>
  </div>



</div>
@stop
