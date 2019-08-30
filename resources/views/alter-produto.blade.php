<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Comercial Laravel</title>

        <!-- Favicon -->
        <link href="{{URL::asset('img/favicon.ico')}}" rel="shortcut icon">

        <!-- Fonts -->        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" />       

        <!-- JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="{{URL::asset('js/ajax.js')}}"></script>
    </head>
    <body>
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
                            <li><a href="../editora/create">Editora</a></li>                                               
                            <li><a href="#">Autores</a></li>
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
        <div id="line-one">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" id="center">              
                        <h1><b>Produto</b></h1>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ol class="breadcrumb">
                            <li><a href="">Panel</a></li>                  
                            <li><a href="{{route('product.index')}}">Produtos</a></li>                  
                            <li class="active">Alteração</li>
                        </ol>              
                    </div>          
                </div>
                <div class="row">  
                    <br>
                    <h4 id="center"><b>ALTERAÇÃO DOS DADOS DO PRODUTO</b></h4>
                    <br> 
                    <form method="post" 
                          action="{{route('product.update', $product->id)}}" 
                          enctype="multipart/form-data">
                        {!! method_field('put') !!}
                        {{ csrf_field() }}
                        <div class="col-md-6">              
                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input type="text" name="name" class="form-control" value="{{$product->name or old('name')}}" required>
                            </div>
                        </div>

                        <div class="col-md-6">              
                            <div class="form-group">
                                <label for="name">Editora</label>
                                <select id="editora_id" name="editora_id" class="form-control">
                                   @foreach ($editoras as $editora) 
                                       <option value="{{ $editora->id}}" {{ $product->editora_id == $editora->id ? "selected" : ""}} >{{ $editora->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="col-md-6">              
                            <div class="form-group">
                                <label for="name">Autor</label>
                                <select id="autor_id" name="autor_id" class="form-control">
                                   @foreach ($autores as $autor) 
                                       <option value="{{ $autor->id}}" {{ $product->autor_id == $autor->id ? "selected" : ""}} >{{ $autor->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">                   
                            <button type="reset" class="btn btn-default">
                                Limpar
                            </button>
                            <button type="submit" 
                                    class="btn btn-warning" id="black">
                                Alterar
                            </button>
                        </div>
                    </form>             
                </div>
            </div>
        </div>
    </body>
</html>