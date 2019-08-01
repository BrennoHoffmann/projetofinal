@extends ('template')

@section ('content')
<form class="container" method = "post" action = "/delete/{{$product->id}}">
    @csrf
    @method('DELETE')
  <div class="form-group">
    <label for="exampleFormControlInput1">Name of Product</label>
    <input readonly name = "name"type="Text" class="form-control" id="exampleFormControlInput1" value="{{$product->name}}" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Categoria do Produto</label>
    <select  name="type" class="form-control" id="exampleFormControlSelect1">
      <option disabled value='1' @if($product->type_id == 1)selected @endif>casual</option>
      <option disabled value='2' @if($product->type_id == 2)selected @endif>esportiva</option>
      <option disabled value='3' @if($product->type_id == 3)selected @endif>social</option>      
    </select>
   
  </div>
  <div class="form-group">
  <div class="form-group">
    <label for="exampleFormControlTextarea1">description of product</label>
    <textarea readonly name="description" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$product->description}}</textarea>
  </div>
   
  </div>
  <div class="form-group">
      <label for="exampleFormControlTextarea1">Valor do Produto</label><br>
   <input readonly type="number" name="price" value="{{$product->price}}">
  </div>
  <button type="submit">ENVIAR</button>
</form>

@endsection