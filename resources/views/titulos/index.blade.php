@extends('template.template')
@section('content')
    <!-- Page header -->
    <div class="header">
        <div class="heading-elements" style="text-align: right">
            <div class="heading-btn-group">
                <a href="{{ URL::to('/titulos/create/'.$colecao->id) }}" class="btn btn-success">
                    <span> Adicionar Títulos</span></a>
            </div>
        </div>

        <div class="panel-heading">
            <h4>
                <i class="icon-arrow-left52 position-left"></i> <span class="text-semibold"></span>
                Títulos da Coleção {{$colecao->nome}}
            </h4>
        </div>
        <hr>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"><i class="icon-home2 position-left"></i>Home</a></li>
            <li class="breadcrumb-item"><a href="/colecoes"><i class="icon-home2 position-left"></i> Coleções</a></li>
            <li class="breadcrumb-item active">Titulos da Coleção {{$colecao->nome}}</li>
        </ol>

    </div>
    <!-- /page header -->

    <!-- Conteúdo -->

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Titulos</h4>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Editora</th>
                                <th>Valor</th>
                                <th>Data de lancamento</th>
                                <th>Autor</th>
                                <th>Review</th>
                                <th>Nota</th>
                                <th>Conservacao</th>
                                <th>Apego</th>
                                <th class="text-center">Ações</th>
                        </thead>
                        <tbody>

                            @foreach($titulos as $chave => $titulo)
                                <tr>
                                    <td>{{ $titulo->nome}}</td>
                                    <td>{{ $titulo->editora }}</td>
                                    <td>{{ $titulo->valor}}</td>
                                    <td>{{ $titulo->data_lancamento }}</td>
                                    <td>{{ $titulo->autor }}</td>
                                    <td>{{ $titulo->review }}</td>
                                    <td>{{ $titulo->nota }}</td>
                                    <td>{{ $titulo->conservacao }}</td>
                                    <td>{{ $titulo->apego }}</td>

                                <td class="text-center">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <i class="icon-three-bars color"></i>
                                                <b class="caret hidden-sm hidden-xs"></b>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a style="color: green" href="{{url('titulos/' . $titulo->id . '/edit')}}"><i
                                                                class="pe-7s-note"></i>
                                                        Editar Titulos</a>
                                                </li>
                                                <li>
                                                    <a style="color: red" href="{{url('titulos/' . $titulo ->id . '/delete')}}"><i
                                                                class="pe-7s-trash"></i>
                                                        Excluir Titulos</a>
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
