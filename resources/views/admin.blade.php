@extends('template')

@section('content')    


<div class="container">
<table class="table table-striped ">
  <thead>
      @foreach($table as $product)
    <tr>
      <th scope="col">#</th>
      <th scope="col"></th>
      <th scope="col">Stock</th>
      <th scope="col">Sale</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Product</th>
      <td>{{$product->name}}</td>
      <td>{{$product->stock}}</td>
      
     
    </tr>
    
    @endforeach
    </tr>
  </tbody>
</table>
</div>

@endsection


