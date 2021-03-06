@extends('template')

@section('content')
<link rel="stylesheet" href="homestyle.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<div id="carouselExampleIndicators" class="carousel slide container carrossel1" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner m-0 carrossel1">
        <div class="carousel-item active">
            <img id="sliders" class="d-block w-100" src="../Imagens/banner1.png" alt="First slide">
        </div>
        <div class="carousel-item">
            <img id="sliders" class="d-flex w-100" src="../Imagens/banner2.png" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img id="sliders" class="d-block w-100" src="../Imagens/banner3.png" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>



<div class="container">
    <div class="row">
        @foreach($dados as $card)
        <div class="shirt3 col-sm text-center mt-5">
            <a href="knowMore/{{$card->id}}"><img src="{{$card->image}}" alt="Avatar" style="width:300px;height:300px;"></a>
            <h1>{{$card->name}}</h1>
            <h4>R${{$card->price}}</h4>
            <a style="background-color: #6d78b0; color:white;"class="btn btn" href="knowMore/{{$card->id}}">Buy now</a>
        </div>
        @endforeach
        <!-- <div class="flip-card"> -->
        <!-- <div class="flip-card-inner"> -->
        <!-- <div class="flip-card-back"> -->
    </div>
</div>
</div>




@endsection