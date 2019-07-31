@extends('template')

@section('content')
<link rel="stylesheet" href="{{asset('css/KnowMore.css')}}">
<section id="name">
    <div class="title">
        <h1>{{$query->name}}</h1>
    </div>
</section>
<section id="description">
    <div class="boxImage">
        <img class="imagePosition1" src="{{asset($query->image)}}" alt="">
    </div>
    <div class="price-description">
        <div>
            <p>
                <h4> <em> description of your product</em></h4>
            </p>
            {{$query->description}}
        </div>
        <hr>
        <div>
            <p><em>R$<em> {{$query->price}}</p>
        </div>
        <div>
            <input type="submit" value="Buy Now">
        </div>
    </div>
</section>




@endsection