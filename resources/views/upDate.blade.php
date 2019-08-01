@extends('template')

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<h1 class="container">Up Date Your Product</h1>

<form class="container" method = "post" action = "/upDate/{{$product->id}}">
    @csrf
    @method('PUT')
  <div class="form-group">
    <label for="exampleFormControlInput1">Name of Product</label>
    <input name = "name"type="Text" class="form-control" id="exampleFormControlInput1" value="{{$product->name}}" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Categoria do Produto</label>
    <select name="type" class="form-control" id="exampleFormControlSelect1">
      <option value='1' @if($product->type_id == 1)selected @endif>casual</option>
      <option value='2' @if($product->type_id == 2)selected @endif>esportiva</option>
      <option value='3' @if($product->type_id == 3)selected @endif>social</option>      
    </select>
   
  </div>
  <div class="form-group">
  <div class="form-group">
    <label for="exampleFormControlTextarea1">description of product</label>
    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$product->description}}</textarea>
  </div>
   
  </div>
  <div class="form-group">
      <label for="exampleFormControlTextarea1">Valor do Produto</label><br>
   <input type="number" name="price" value="{{$product->price}}">
  </div>
  <button type="submit">ENVIAR</button>
</form>



@endsection