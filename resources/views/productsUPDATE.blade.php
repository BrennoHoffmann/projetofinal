
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
<div class= "d-flex container justfy-content-center ">
<h1 ><i>List Of Products</i></h1>
</div>
@foreach($viewAll as $view)
<div class="card" style="width:18rem">
    <img class="card-img-top" src="{{$view->image}}" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">{{$view->name}}</h5>   
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">{{$view->price}}</li>  
    </ul>
    <div class="card-body">
        <a href="upDate/{{$view->id}}" class="card-link">upDate your Product</a>
        <a href="delete/{{$view->id}}" class="card-link">delete your Product</a>
    </div>
</div>
@endforeach
@endsection

