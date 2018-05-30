@extends('template.template')
@section('content')
    <!-- Page header -->
    <div class="header">
        <div class="heading-elements" style="text-align: right">
            <div class="heading-btn-group">
                <a href="{{ URL::to('/colecoes/create') }}" class="btn btn-success">
                    <i class="pe-7s-albums" style="font-size: 55px"> </i>
                    <span> Adicionar colecoes</span></a>
            </div>
        </div>

        <div class="panel-heading">
            <h4>
                <i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Projeto</span> -
                colecoes
            </h4>
        </div>
        <hr>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"><i class="icon-home2 position-left"></i> Principal</a></li>
            <li class="breadcrumb-item active">colecoes</li>
        </ol>

    </div>
    <!-- /page header -->

    <!-- Conteúdo -->


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Colecoes</h4>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Edição</th>
                            <th>Nome</th>
                            <th>Editora</th>
                            <th>Acervo</th>
                            <th class="text-center">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($colecoes as $chave => $colecao)
                            <tr>
                                <td>{{ $colecao->imagem }}</td>
                                <td>{{ $colecao->n_edicao }}</td>
                                <td>{{ $colecao->nome}}</td>
                                <td>{{ $colecao->editora}}</td>
                                <td>
                                    <a href="{{url('colecoes/' . $colecao->id . '/titulos')}}"><i
                                                class="pe-7s-note"></i>
                                        Títulos</a>
                                </td>

                                <td class="text-center">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <i class="icon-three-bars color"></i>
                                                <b class="caret hidden-sm hidden-xs"></b>
                                            </a>
                                            <ul class="dropdown-menu">

                                                <li>
                                                    <a href="{{url('colecoes/' . $colecao->id . '/edit')}}"><i
                                                                class="pe-7s-note"></i>
                                                        Editar colecoes</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('colecoes/' . $colecao ->id . '/delete')}}"><i
                                                                class="pe-7s-trash"></i>
                                                        Excluir colecoes</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>


@endsection
