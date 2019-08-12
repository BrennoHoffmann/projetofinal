@extends('template')

@section('content')
<link rel="stylesheet" href="{{asset('css/KnowMore.css')}}">
<section class="col-lg-12" id="name">
    <div class="title">
    <h1>{{$query->name}}</h1>
       
            </div>
        <div class="description">
            <h2>  Description of your product:</h2>
        </div>
    
</section>


<section id="description">
    <div class="boxImage">
        <img class="imagePosition1" src="{{asset($query->image)}}" alt="">
    </div>

    <div class="price-description">
        <div class="spaceDesc">
            <h3 style="margin-top: 80px; d-flex justify-content-center">
            {{$query->description}}
            </h3>
        </div>
        <h4> <em> Price</em></h4>
        <div class="spacePrice">
            <p>R$ {{$query->price}}</p>

        </div>
        <div >
            <a href="/cart/add/{{$query->id}}" style="background-color: #6d78b0; color:white;" class="btn " type="submit"> Buy now</a>
        </div>
    </div>

</section>





@endsection