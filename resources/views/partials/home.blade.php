@extends('layouts.app')


@section('content')
<div class="home-container">
<div class="prodotti">  <!---Card Comics--->
 @foreach ($comics as $card)
     <div class="card">
  <a href="#"><img src="{{ $card['thumb'] }}" alt=" {{ $card['description'] }}" /></a>
  <h5>{{$card['series']}}</h5>
    </div>

     @endforeach


</div>
<div class="btn-load">
    <a href="#">LOAD MORE</a>
</div>

</div>


@endsection
