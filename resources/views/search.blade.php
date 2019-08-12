@extends('template')
@section('content')

@if(@isset($filter))
<h1 class=" justify-content-center d-flex" >Results</h1>
<div class=" justify-content-center d-flex ">

    @foreach ($filter as $dat)      
   
    <div class="card justify-content-center d-flex" style="width: 18rem; ">
        
        <img class="card-img-top" src="{{$dat->image}}" alt="Imagem de capa do card">
        <div class="card-body justify-content-center d-flex">
        </div>
        <a style="background-color: #6d78b0;"class="btn btn-dark" href="/cart/add/{{$dat->id}}">Buy now</a>
    </div>
    <div>
    
    </div>
    @endforeach
    
</div>
@endif

@endsection