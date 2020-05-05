@extends('layouts.layout')
  
       
        <div id="line-one">   
            <div class="container">
                <div class="row">
                    <div class="col-md-12" id="center"> 
                        <h1><b>Autores</b></h1>
                        <br>
                    </div>
                </div>
                <span class="mensagem-deletar"></span>
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
                <div class="container">
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

                                    <div class="autores">
                                    @foreach($autores as $autor)
                                    <tr id="linha<?= $autor->id ?>">
                                        <td class="center" id="{{$autor->id}}">{{$autor->id}}</td>
                                        <td title="Nome">{{$autor->name}}</td>
                                        <td id="center">
                                            <a href="{{route('autor.edit', $autor->id)}}" 
                                               data-toggle="tooltip" 
                                               data-placement="top"
                                               title="Alterar"><i class="fa fa-pencil"></i></a>
                                            &nbsp;

                                            <button type="submit" style="background-color: #fff" id="deletar-autor" onclick="deletaAutor( <?php echo $autor->id;?> )">
                                                <a><i class="fa fa-trash-o"></i></a>                                                    
                                            </button>
                                        </td>               
                                    </tr>
                                    @endforeach
                                    </div>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <img src="{{URL::asset('img/subir.png')}}" 
                 id="up" 
                 style="display: none;" 
                 alt="Ícone Subir ao Topo" 
                 title="Subir ao topo?">

