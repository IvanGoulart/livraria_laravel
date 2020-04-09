        @extends('layouts.layout')
        <div id="line-one">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" id="center">              
                        <h1><b>Autor</b></h1>
                        <br>
                    </div>

                    <span id="mensagem-validacao"></span>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ol class="breadcrumb">
                            <li><a href="">Panel</a></li>                  
                            <li><a href="{{route('autor.index')}}">Autores</a></li>                  
                            <li class="active">Cadastro</li>
                        </ol>              
                    </div>          
                </div>
                <div class="row">  
                    <br>
                    <h4 id="center"><b>CADASTRO DOS DADOS DE AUTORES</b></h4>
                    <br> 
                        
                        <div class="col-md-6">              
                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input type="text" name="autor" 
                                       class="form-control" id="form-autor" value=""
                                       required>
                            </div>
                        </div>
                        <div class="col-md-12">                   
                            <button type="reset" class="btn btn-default">
                                Limpar
                            </button>
                            <button type="submit" 
                                    class="btn btn-warning" id="adicionar-autor">
                                Cadastrar
                            </button>
                        </div>
                </div>
            </div>
        </div>
 