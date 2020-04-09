<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Livraria</title>
        
        <!-- Favicon -->
        <link href="{{URL::asset('img/favicon.ico')}}" rel="shortcut icon">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" /> 
        <link href="{{URL::asset('css/lightbox.css')}}" rel="stylesheet" type="text/css" /> 

        <!-- JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="{{URL::asset('js/validaFormAutor.js')}}"></script>
        <script src="{{URL::asset('js/lightbox.js')}}"></script>
    </head>
    <body>

    @section('menu')

    <nav class="navbar navbar-inverse navbar-fixed-top">       
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav" id="link-white">
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" 
                        href="#" style="text-decoration: none">
                        <span class="glyphicon glyphicon-pencil"></span>
                        <span id="underline">Cadastros</span> 
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">                           
                        <li><a href="product/create">Livros</a></li>                                               
                        <li><a href="editora/create">Editora</a></li>                                               
                        <li><a href="autor/create">Autores</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav" id="link-white">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" 
                        href="#" style="text-decoration: none">
                        <span class="glyphicon glyphicon-th-list"></span>
                        <span id="underline">Listas</span> 
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">                           
                        <li><a href="/product">Livros</a></li>                                               
                        <li><a href="/editora">Editora</a></li>                                               
                        <li><a href="/autor">Autores</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right" id="link-white">
                <li><a href="/" 
                        style="text-decoration: none">
                        <span class="glyphicon glyphicon-log-in"></span> 
                        <span id="underline">Sair</span></a></li>  
                <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
            </ul>
        </div>       
    </nav>    
    @if (session('message'))
    <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" 
            data-dismiss="alert"
            aria-label="close">&times;</a>
        {{ session('message') }}
    </div>
    @endif
    <img src="{{URL::asset('img/subir.png')}}" 
        id="up" 
        style="display: none;" 
        alt="Ícone Subir ao Topo" 
        title="Subir ao topo?">

    @show

        @yield('content')

    </body>
    <script src="{{URL::asset('js/gravaAutor.js')}}"></script>

</html>

