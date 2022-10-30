@extends('layouts.app')


@section('content')
<div class="home-container">
<div class="prodotti">
 @foreach ($comics as $cc)
     <div class="card">
  <img src="{{ $cc['thumb'] }}" alt=" {{ $cc['description'] }}" />
  <h5>{{$cc['series']}}</h5>
    </div>

     @endforeach


</div>


</div>


@endsection
