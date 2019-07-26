<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>teste dessa porra</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
</head>

<body>
   

    <form method="POST" action="/cadastrar" enctype="multipart/form-data" >
        @csrf
        
               <input name="name" type="text" class="form-control" id="validationCustomUsername" placeholder="nome do produto"
                    aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">


                <input name="price" type="decimal" class="form-control" id="validationCustomUsername" placeholder="preço"
                    aria-describedby="inputGroupPrepend" required>

                <input name="description" type="text" class="form-control" id="validationCustomUsername" placeholder="descrição"
                    aria-describedby="inputGroupPrepend" required>                                
                </div>

            </div>
        </div>
        </div>

        <div class="form-group">
            <label for="exampleFormControlFile1">Exemplo de input de arquivo</label>
            <input name="image" type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <select name="type_id" id="type_id">
        <option disabled selected>Escolha uma opção</option>
           @if(isset($tipos))
           @foreach($tipos as $tipo)
            <option name="type" value="{{$tipo->id}}">{{$tipo->name}}</option>
            @endforeach
            @endif
        </select>
         <button type="submit" class="btn btn-primary">Enviar</button> 
    </form>
    
</body>
</html>