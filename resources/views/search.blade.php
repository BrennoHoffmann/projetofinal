<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

@if(@isset($dados))
<ul class="resultado">
    @foreach ($data as $dat)      
    <div class="card" style="width: 18rem;">
        <p>{{$dat->name}}</p>
        <img class="card-img-top" src="{{$dat->image}}" alt="Imagem de capa do card">
        <div class="card-body">
             <p class="card-text">{{$dat->descripton}}</p>
        </div>
    </div>

    @endforeach
    
</ul>
@endif

</body>
</html>