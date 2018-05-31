@extends('template.template')
@section('content')



    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Cadastro de Títulos</h4>
                </div>
                <div class="content">

                    {{ Form::open(array('url' => '/titulos',
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
                                <label>Editora</label>
                                <input type="text" name="editora" class="form-control" placeholder="Editora">
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Valor</label>
                                <input type="text" name="valor" class="form-control" placeholder="Valor">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Data de Lançamento</label>
                                <input type="text" name="data_lancamento" class="form-control" value="2017-05-12" placeholder="Data de Lançamento">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Autor</label>
                                <input type="text" name="autor" class="form-control" placeholder="Autor">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Review</label>
                                <textarea name="review" cols="10" rows="5" class="form-control"
                                          placeholder="Meu Review"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Nota</label>
                                <input type="number" name="nota" class="form-control" placeholder="Nota">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Conservação</label><br>
                                <div>
                                <input type="radio" name="conservacao" value="Baixo" > Baixo<br><br>
                                <input type="radio" name="conservacao" value="Médio" checked> Médio<br><br>
                                <input type="radio" name="conservacao" value="Alto"> Alto
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Apego</label><br>
                                <div>
                                    <input type="radio" name="apego" value="Baixo" > Tô nem aí...<br><br>
                                    <input type="radio" name="apego" value="Medio" checked> Pega, mas cuidado.<br><br>
                                    <input type="radio" name="apego" value="Alto"> Tá, empresto! Mas se...<br><br>
                                    <input type="radio" name="apego" value="Extremo"> My precious!
                                </div>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="id_colecao" value="{{ $id }}">
                    <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">


                    <button type="submit" class="btn btn-info btn-fill pull-right">Cadastrar</button>
                    <div class="clearfix"></div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection