@extends ('template')

@section ('content')
@isset($updated)
<script>
    alert('Product successful updated')
</script>
@endisset
@isset($updated)
<script>
    alert('Product successful deleted')
</script>
@endisset
<h1 class= 'container'><i>List Of Products</i></h1>

@foreach($viewAll as $view)
<ul class = 'container'>   
    <li>{{$view->name}} </li>
    <li>{{$view->description}}</li>
    <li>{{$view->price}} <</li>
    <li>{{$view->image}} </li>
    <a href="upDate/{{$view->id}}">upDate your Product</a>
    <a href="delete/{{$view->id}}">delete your Product</a>
<hr>
</ul>

@endforeach

@endsection