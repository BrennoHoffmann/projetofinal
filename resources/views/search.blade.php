@extends('template')
@section('content')

@if(@isset($filter))
<h1 class=" justify-content-center d-flex" >Result your search</h1>
<div class=" justify-content-center d-flex ">

    @foreach ($filter as $dat)      
   
    <div class="card" style="width: 18rem;">
        
        <img class="card-img-top" src="{{$dat->image}}" alt="Imagem de capa do card">
        <div class="card-body">
             
       
        </div>
       
    </div>
    <div>
    
    </div>
    @endforeach
    
</div>
@endif

@endsection