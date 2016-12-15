@extends('layouts.master')


@section('title')
    All My Partners
@stop


@section('content')
<div class="container">

    <h1>All My Partners</h1>

@if ($partners->count() > 0)
    @foreach ($partners as $key=>$partner)

        @if(!fmod($key, 3))

            @if($key != 0)
                </div> <!-- close row -->
            @endif

            <div class="row"> <!-- open row -->
        @endif

      <div class="col-md-4">
        <div class="thumbnail" style="height: 150px; text-align:center; vertical-align:middle">
            <div s3tyle="height:80%; vertical-align:middle">
                <span class="helper"></span>
              <a href="{{ route('partners.show', $partner->id) }}"><img class="img-responsive" src="/images/logos/{{ $partner->logo_url }}" alt="{{ $partner->name }}" style="max-height:100px; max-width:200px; vertical-align:middle"></a>
              <a href="{{ route('partners.show', $partner->id) }}"><b>{{ $partner->name }}</b></a>
            </div>
        </div>
      </div>

         @if(($key+1) == $partners->count())
             </div> <!-- close row -->
         @endif

    @endforeach
@endif

<br>
<a href="{{ route('partners.create') }}"><b>Add a New Partner</b></a>

</div>
@stop
