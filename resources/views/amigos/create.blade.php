@extends('template.template')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Cadastro de Amigos</h4>
                </div>
                <div class="content">

                    {{ Form::open(array('url' => '/amigos',
                    'id' => 'formExemplo','data-toggle' => 'validator', 'role' => 'form')) }}

                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Nome</label>
                                <input type="text" name="nome" class="form-control" placeholder="Nome">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Apelido</label>
                                <input type="text" name="apelido" class="form-control" placeholder="Apelido">
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Telefone</label>
                                <input type="text" name="telefone" class="form-control" placeholder="Telefone">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Rua</label>
                                <input type="text" name="rua" class="form-control" placeholder="Rua">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Bairro</label>
                                <input type="text" name="bairro" class="form-control" placeholder="Bairro">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Cidade</label>
                                <input type="text" name="cidade" class="form-control" placeholder="Cidade">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Estado</label>
                                <input type="text" name="estado" class="form-control" placeholder="estado">
                            </div>
                        </div>
                    </div>

                    {{--<input type="hidden" name="id_colecao" value="{{ $id }}">--}}
                    <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">


                    <button type="submit" class="btn btn-info btn-fill pull-right">Cadastrar</button>
                    <div class="clearfix"></div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection