@extends('template.template')
@section('content')



    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Edição de amigos</h4>
                </div>
                <div class="content">
                    {{ Form::model($amigos, array('route' => array('amigos.update', $amigos->id),
                     'method' => 'PUT',
                    'id' => 'formExemplo','data-toggle' => 'validator', 'role' => 'form')) }}
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Nome</label>
                                <input type="text" name="nome" value="{{ $amigos->nome }}" class="form-control" placeholder="Nome">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Apelido</label>
                                <input type="text" name="editora" value="{{ $amigos->apelido }}" class="form-control" placeholder="Apelido">
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Telefone</label>
                                <input type="text" name="valor" value="{{ $amigos->telefone }}" class="form-control" placeholder="Telefone">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Rua</label>
                                <input type="text" name="rua" value="{{ $amigos->rua }}" class="form-control" placeholder="Rua">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Bairro</label>
                                <input type="text" name="bairro" value="{{ $amigos->bairro }}"class="form-control" placeholder="Bairro">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Cidade</label>
                                <input type="text" name="cidade" value="{{ $amigos->cidade }}"class="form-control" placeholder="Cidade">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Estado</label>
                                <input type="text" name="estado" value="{{ $amigos->estado }}"class="form-control" placeholder="Estado">
                            </div>
                        </div>
                    </div>

                    {{--<div class="row">--}}
                        {{--<div class="col-md-5">--}}
                            {{--<div class="form-group">--}}
                                {{--<label>Foto</label>--}}
                                {{--<input type="text" name="foto" value="{{ $amigos->foto }}"class="form-control" placeholder="Foto">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}


                    <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">

                    <button type="submit" class="btn btn-info btn-fill pull-right">Editar</button>
                        <div class="clearfix"></div>
                        {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@endsection