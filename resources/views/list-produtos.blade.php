    @extends('layouts.layout')

   
    @if (session('message'))
    <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" 
            data-dismiss="alert"
            aria-label="close">&times;</a>
        {{ session('message') }}
    </div>
    @endif
    <div id="line-one">   
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="center"> 
                    <h1><b>Livros</b></h1>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="#">Panel</a></li>                  
                        <li class="active">Livros</li>
                    </ol>
                    <br>
                    <a href="{{route('product.create')}}" 
                        class="btn btn-default btn-sm pull-right">
                        <span class="glyphicon glyphicon-plus"></span> Adicionar</a>

                    </div>
                </div>           
            </div>
            <div class="row">
                <div class="col-md-12">   
                    <br />
                    <h4 id="center"><b>LIVROS CADASTRADOS ({{$total}})</b></h4>
                    <br>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th id="center">Código</th>
                                    <th>Nome</th>
                                    <th>Editora</th>
                                    <th>Autor</th>
                                    <th id="center">Ações</th>                
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($produtos as $produto)
                                <tr>
                                    <td class="fadeOut" id="center">{{$produto->id}}</td>
                                    <td title="Nome">{{$produto->name}}</td>
                                    <td title="EditoraNome">{{$produto->editora->name}}</td>
                                    <td title="EditoraNome">{{$produto->autor->name}}</td>
                                    <td id="center">
                                        <a href="{{route('product.edit', $produto->id)}}" 
                                            data-toggle="tooltip" 
                                            data-placement="top"
                                            title="Alterar"><i class="fa fa-pencil"></i></a>
                                        &nbsp;

                                        <button type="submit" style="background-color: #fff" id="grava-livro">
                                            <a><i class="fa fa-trash-o"></i></a>                                                    
                                        </button>
                                    </td>               
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{URL::asset('img/subir.png')}}" 
                id="up" 
                style="display: none;" 
                alt="Ícone Subir ao Topo" 
                title="Subir ao topo?">

