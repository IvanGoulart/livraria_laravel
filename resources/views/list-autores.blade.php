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
                        <h1><b>Autores</b></h1>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Panel</a></li>                  
                            <li class="active">Autores</li>
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
                        <h4 id="center"><b>AUTORES CADASTRADAS ({{$total}})</b></h4>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th id="center">Código</th>
                                        <th>Nome</th>
                                        <th id="center">Ações</th>                
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($autores as $autor)
                                    <tr>
                                        <td id="id">{{$autor->id}}</td>
                                        <td title="Nome">{{$autor->name}}</td>
                                        <td id="center">
                                            <a href="{{route('autor.edit', $autor->id)}}" 
                                               data-toggle="tooltip" 
                                               data-placement="top"
                                               title="Alterar"><i class="fa fa-pencil"></i></a>
                                            &nbsp;
                                            <form style="display: inline-block;" method="POST" 
                                                        action=""                                                        
                                                        title="Excluir">
                                            {{ csrf_field() }}

                                            <button type="submit" style="background-color: #fff" id="deletar-autor">
                                                <a><i class="fa fa-trash-o"></i></a>                                                    
                                            </button>
                                            </form>
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

