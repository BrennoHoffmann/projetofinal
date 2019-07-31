@extends('template')

@section('content')

@foreach($dados as $card)
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="{{$card->image}}" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
    <a href="knowMore/{{$card->id}}">know more</a>
      <h1>{{$card->name}}</h1> 
      <p>R${{$card->price}}</p>
     
    </div>
  </div>
</div>
@endforeach



@endsection

