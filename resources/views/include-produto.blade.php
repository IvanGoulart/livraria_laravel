@extends('layouts.layout')

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
                            <li><a href="">Panel</a></li>                  
                            <li><a href="{{route('product.index')}}">Livros</a></li>                  
                            <li class="active">Cadastro</li>
                        </ol>              
                    </div>          
                </div>
                <div class="row">  
                <span id="mensagem-validacao"></span>    
                    <br>
                    <h4 id="center"><b>CADASTRO DOS DADOS DO LIVRO</b></h4>
                    <br> 
                    <form> 
                        <div class="col-md-12">              
                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input type="text" name="name" class="form-control" id="form-nome" required>
                            </div>
                        </div>
                        <div class="col-md-12">              
                            <div class="form-group">
                                <label for="name">Editora</label>
                                <select id="form-editora" name="editora_id" class="form-control">
                                   @foreach ($editoras as $editora) 
                                       <option value="{{ $editora->id}}">{{ $editora->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">              
                            <div class="form-group">
                                <label for="name">Autor</label>
                                <select id="form-autor" name="autor_id" class="form-control">
                                   @foreach ($autores as $autor) 
                                       <option value="{{ $autor->id}}">{{ $autor->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">                   
                            <button type="reset" class="btn btn-default">
                                Limpar
                            </button>
                            <button type="submit" 
                                    class="btn btn-warning" id="adicionar-livro">
                                Cadastrar
                            </button>
                        </div>
                    </form>             
                </div>
            </div>
        </div>
  