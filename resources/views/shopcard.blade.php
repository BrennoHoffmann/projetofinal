@extends('template')

@section('content')

<form action={{url('add')}} method="post">

<input type="hidden" name="_token" value="{{csrf_token()}}"/>

<input type="text" name="id" value="2"/> <br>

name <input type="text" name="name"/> <br>

price <input type="text" name="price"/> <br>

qnt <input type="number" name="quantity"/> <br>

<input type="submit" value="submit">


</form> 



@endsection

