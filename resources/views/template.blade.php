<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}"> 
    <link rel="stylesheet" href="{{asset('css/Knowmore.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('css/KnowMore.css')}}"> -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <script type="text/Javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="/js/components/javascriptpersonalizado.js">

    </script>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg  d-flex justify-content-between">
            <a href="/">
                <img src="{{asset('imagens/polvopi.png')}}" alt="logo" width="150px" height="75px">
            </a>

            <div id="cssmenu">
                <ul>

                    <li><a href="outlet">Outlet</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="products">Products</a></li>
                    <li><a href="/" id="homestyle"><i class="fa fa-home"></i>Home</a></li>
                </ul>
            </div>
            <form action="/busca" method="POST" id="pesquisa">
                @csrf
                <input type="text" name="search" id="seacher" placeholder="you seek...">
                <input id="cudecavalo" type="submit" name="enviar" value="search">

            </form>
           
            <div class="d-flex carrinho justify-content-around">
                <a href="cart">
                    <img src="{{asset('imagens/carrinho02.png')}}" alt="logo" width="40px" height="40px" href="buys">
                </a>

                <div>


                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>

                </div>
            </div>
        </nav>

    </header>
    <br>
    @yield('content')

    
    <br>
    <br>
    <br>
    <br>

    <footer class="page-footer font-small blue pt-4">
        <div class="container-fluid text-center text-md-left footerrr">
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3 flipcardpalmeiras">
                    <br>
                    <h5 class="text-uppercase">Informações para contato</h5>
                    <p>Endereço: Rua dos Bobos Nº 0
                        <br>
                        Telefone: (11) 7070-7070
                        <br>
                        São Paulo - SP
                        <br>
                        Caixa Postal: 090-987
                    </p>
                </div>

                <hr class="clearfix w-100 d-md-none pb-3">

                <div class="col-md-3 mb-md-0 mb-3 flipcardpalmeiras">
                    <h5 class="text-uppercase">lojas fisicas</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">renner</a>
                        </li>
                        <li>
                            <a href="#!">c&a</a>
                        </li>
                        <li>
                            <a href="#!">riachuelo</a>
                        </li>
                        <li>
                            <a href="https://www.centauro.com.br/">centauro</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-3 mb-md-0 mb-3 flipcardpalmeiras">
                    <h5 class="text-uppercase">redes sociais</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="https://www.linkedin.com">linkedin</a>
                        </li>
                        <li>
                            <a href="https://www.twitter.com">twitter</a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com">facebook</a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com">instagram</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer-copyright text-center py-3 footerr flipcardpalmeiras">© 2019 Copyright:
            <a href="https://mdbootstrap.com/education/bootstrap/"> PAVÃO RAFÃO E BRENNO DA MASSA</a>
        </div>

    </footer>


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>