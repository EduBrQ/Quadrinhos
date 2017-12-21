@extends('template.template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Status</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    Você está Logado!
                </div>
            </div>
            <div class="col-md-8 col-md-offset-4">
            <a href="{{ URL::to('/colecoes/1/titulos') }}" class="btn btn-success">
                <span> Minha Coleção </span></a>

            <a href="{{ URL::to('/emprestimos') }}" class="btn btn-success">
                <span> Itens Emprestados </span></a>
            </div>
        </div>
    </div>
</div>
@endsection
