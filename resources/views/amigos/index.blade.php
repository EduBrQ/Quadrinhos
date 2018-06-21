@extends('template.template')
@section('content')
    <!-- Page header -->
    <div class="header">

        <div class="panel-heading">
            <div class="heading-elements" style="text-align: right">
                <div class="heading-btn-group">

                    <a href="{{ URL::to('/amigos/create/') }}" class="btn btn-success">
                        <i class="pe-7s-add-user" style="font-size: 55px"> </i>
                        {{--<span> Adicionar Amigos</span>--}}
                    </a>
                </div>
            </div>

            <h4>
                <i class="icon-arrow-left52 position-left"></i> <span class="text-semibold"></span>
                Amigos
            </h4>
        </div>
        <hr>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/amigos"><i class="icon-home2 position-left"></i> Principal</a></li>
            <li class="breadcrumb-item"><a href="/"><i class="icon-home2 position-left"></i> Emprestimo</a></li>

            <li class="breadcrumb-item active">Amigos</li>
        </ol>

    </div>
    <!-- /page header -->

    <!-- Conteúdo -->

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Amigos</h4>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-hover table-striped">
                        <thead>
                        <th>Amigo</th>
                        <th>Amigo</th>
                        <th>Apelido</th>
                        <th>telefone</th>
                        <th>Rua</th>
                        <th>Bairro</th>
                        <th>Cidade</th>
                        <th>Estado</th>

                        </thead>
                        <tbody>
                        @foreach($amigos as $chave => $nome)
                            <tr>
                                <td><img src="/uploads/avatars/{{ $nome->avatar }}" style="width:32px; height:32px; top:10px; left:10px; border-radius:50%;"></td>
                                <td>{{ $nome->nome}}</td>
                                <td>{{ $nome->apelido }}</td>
                                <td>{{ $nome->telefone}}</td>
                                <td>{{ $nome->rua}}</td>
                                <td>{{ $nome->bairro }}</td>
                                <td>{{ $nome->cidade }}</td>
                                <td>{{ $nome->estado }}</td>




                                <td class="text-center">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <i class="icon-three-bars color"></i>
                                                <b class="caret hidden-sm hidden-xs"></b>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a style="color:green;" href="{{url('amigos/' . $nome->id . '/edit')}}"><i
                                                                class="pe-7s-note"></i>
                                                        Editar Titulos</a>
                                                </li>

                                                <li>
                                                    <a style="color: red" href="{{url('amigos/' . $nome ->id . '/delete')}}"><i
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
