    @extends('layouts.layout')

        <div id="line-one">   
            <div class="container">
                <div class="row">
                    <div class="col-md-12" id="center"> 
                        <h1><b>Editoras</b></h1>
                        <br>
                    </div>
                </div>
                <span class="mensagem-deletar"></span>
                <div class="row">
                    <div class="col-md-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Panel</a></li>                  
                            <li class="active">Editoras</li>
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
                        <h4 id="center"><b>EDITORAS CADASTRADAS ({{$total}})</b></h4>
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
                                    @foreach($editoras as $editora)
                                    <tr>
                                        <td id="center">{{$editora->id}}</td>
                                        <td title="Nome">{{$editora->name}}</td>
                                        <td id="center">
                                            &nbsp;
                                            <a href="{{route('editora.edit', $editora->id)}}" 
                                               data-toggle="tooltip" 
                                               data-placement="top"
                                               title="Alterar"><i class="fa fa-pencil"></i></a>
                                            &nbsp;

                                                                                
                                                <button type="submit" style="background-color: #fff" id="deletar-editora">
                                                    <a><i class="fa fa-trash-o"></i></a>                                                    
                                                </button>
                                              
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

