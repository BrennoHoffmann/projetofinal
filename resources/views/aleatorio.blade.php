<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meteoro de Foda-se</title>
</head>
<body>

<a href="/cadastrar">voltar ao cadastro</a>

    <form action="/busca" method="get">
    <input type="text" name="search" value="" placeholder="busque a tua camiseta">
    <button type="submit" class="btn btn-primary btn-sm" title="Pesquisar">Pesquisar</button>
    </form> 
    @foreach($imagens as $imagem)
    <img src="{{$imagem->image}}" alt="">
        {{$imagem->name}}
        {{$imagem->type_id}}
        {{$imagem->price}}
    @endforeach 
      
    <select name="search_tipos" id="search_tipos">
    <option disabled selected> selecione uma categoria</option>
    @foreach($type as $tipo)
            <option name="type" value="{{$tipo->id}}">{{$tipo->name}}</option>
    @endforeach
    </select>
            
</body>
</html>