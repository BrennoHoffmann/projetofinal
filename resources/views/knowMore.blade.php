@extends('template')

@section('content')
<link rel="stylesheet" href="{{asset('css/KnowMore.css')}}">
<section class="container" id="name">
    <div class="title">
       
            <h1>{{$query->name}}</h1>
            </div>
        <div class="description">
            <h4> <em> description of your product</em></h4>
        </div>
    
</section>
<section id="description">
    <div class="boxImage">
        <img class="imagePosition1" src="{{asset($query->image)}}" alt="">
    </div>

    <div class="price-description">
        <div class="spaceDesc">
            <p>

            </p>
            - {{$query->description}}
        </div>
        <hr>
        <h4> <em> Price</em></h4>
        <div class="spacePrice">
            <p><em>R$<em> {{$query->price}}</p>

        </div>
        <hr>
        <div >
            <a href="/cart/add/{{$query->id}}" class="btn btn-primary" type="submit"> Buy now</a>
        </div>
    </div>

</section>
<hr>
<section>
    <h2><i>See too</i></h2>
        

</section>




@endsection