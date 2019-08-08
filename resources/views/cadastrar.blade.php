@extends('template')
@section('content')
<link rel="stylesheet" href="Cadastrar.css">
<form class="container col-lg-6" method="POST" action="/cadastrar" enctype="multipart/form-data">
    @csrf
    <h5><i>Product's name</h5>
    <input name="name" type="text" class="form-control" id="validationCustomUsername" placeholder="nome do produto"
        aria-describedby="inputGroupPrepend" required>
    <hr>
    <div class="d-flex justify-content-around">
        <h5>Product Category</h5>
        <label for="exampleFormControlSelect1"></label>
        <select name="type_id" id="type_id">
            <option disabled selected>Choose an option</option>
            @if(isset($type))
            @foreach($type as $tipo)
            <option name="type" value="{{$tipo->id}}">{{$tipo->name}}</option>
            @endforeach
            @endif
        </select>
    </div>
    <hr>
    <h5>Description of Product</h5>
    <textarea name="description" type="text" class="form-control" id="validationCustomUsername"
        placeholder="description" aria-describedby="inputGroupPrepend" required></textarea>
    <hr>
    <div class="d-flex">
        <h5>Image of product</h5>
        <label for="exampleFormControlFile1"></label>
        <input name="image" type="file" class="form-control-file" id="exampleFormControlFile1">
    </div>
    <hr>
    <h5>Quantity Stock</h5>
    <label for="exampleFormControlTextarea1"></label><br>
    <input name="stock" type="decimal" class="form-control" id="validationCustomUsername" placeholder="Quantity Stock"
        aria-describedby="inputGroupPrepend" required>
    <hr>

    <h5>Product Value</h5>
    <label for="exampleFormControlTextarea1"></label><br>
    <input name="price" type="decimal" class="form-control" id="validationCustomUsername" placeholder="price"
        aria-describedby="inputGroupPrepend" required>
    <hr>
    <div class="d-flex justify-content-lg-end buttonCadastro">
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    <hr>

</form>

@endsection