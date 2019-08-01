@extends('template')

@section('content')
  

   
    
</form>

<form class= "container col-lg-6"method="POST" action="/cadastrar" enctype="multipart/form-data">
    @csrf
    <input name="name" type="text" class="form-control" id="validationCustomUsername" placeholder="nome do produto"
        aria-describedby="inputGroupPrepend" required>
    
  <div class="form-group">
    <label for="exampleFormControlSelect1">Choose category</label>
    <select name="type_id" id="type_id">
        <option disabled selected>Escolha uma opção</option>
        @if(isset($type))
        @foreach($type as $tipo)
        <option name="type" value="{{$tipo->id}}">{{$tipo->name}}</option>
        @endforeach
        @endif
    </select>
  </div>
    <div class="form-group">
    <textarea  name="description" type="text" class="form-control" id="validationCustomUsername" placeholder="Description of Product"
            aria-describedby="inputGroupPrepend" required></textarea>
    
  </div>
  <div>
        <input name="price" type="decimal" class="form-control" id="validationCustomUsername" placeholder="preço"
            aria-describedby="inputGroupPrepend" required>
       
    </div>  

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@endsection