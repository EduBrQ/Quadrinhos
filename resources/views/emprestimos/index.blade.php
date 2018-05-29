@extends('template.template')
@section('content')
    <!-- Page header -->
    <div class="header">
        <div class="heading-elements" style="text-align: right">
            <div class="heading-btn-group">

                <a href="{{ URL::to('/emprestimos/create') }}" class="btn btn-success">
                    <span> Novo Emprestimo</span></a>
            </div>
            <div class="btn-circle-download">
                <svg id="arrow" width="14px" height="20px" viewBox="17 14 14 20">
                    <path d="M24,15 L24,32"></path>
                    <polyline points="30 27 24 33 18 27"></polyline>
                </svg>
                <svg id="check" width="21px" height="15px" viewBox="13 17 21 15">
                    <polyline points="32.5 18.5 20 31 14.5 25.5"></polyline>
                </svg>
                <svg id="border" width="48px" height="48px" viewBox="0 0 48 48">
                    <path d="M24,1 L24,1 L24,1 C36.7025492,1 47,11.2974508 47,24 L47,24 L47,24 C47,36.7025492 36.7025492,47 24,47 L24,47 L24,47 C11.2974508,47 1,36.7025492 1,24 L1,24 L1,24 C1,11.2974508 11.2974508,1 24,1 L24,1 Z"></path>
                </svg>
            </div>

        </div>


        <div class="panel-heading">
            <h4>
                <i class="icon-arrow-left52 position-left"></i> <span class="text-semibold"></span>
                Emprestimos
            </h4>
        </div>
        <hr>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"><i class="icon-home2 position-left"></i> Principal</a></li>
            <li class="breadcrumb-item active">Emprestimos</li>
        </ol>

    </div>
    <!-- /page header -->

    <!-- Conteúdo -->

    <div class="content table-responsive table-full-width">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Título</th>
                <th>Data de emprestimo</th>
                <th>Data de entrega</th>
                <th>Observação</th>
                <th class="text-center">Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($emprestimos as $chave => $emprestimo)
                <tr>


                    <td>{{ $emprestimo->amigo->nome }}</td>
                    <td>{{ $emprestimo->titulo->nome }}</td>
                    <td>{{ $emprestimo->data_emprestimo }}</td>
                    <td>{{ $emprestimo->data_entrega }}</td>
                    <td>{{ $emprestimo->observacao }}</td>
                    <td class="text-center">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-three-bars color"></i>
                                    <b class="caret hidden-sm hidden-xs"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{url('emprestimos/' . $emprestimo->id . '/edit')}}"><i
                                                    class="pe-7s-note"></i>
                                            Editar Emprestimos</a>
                                    </li>
                                    <li>
                                        <a href="{{url('emprestimos/' . $emprestimo ->id . '/delete')}}"><i
                                                    class="pe-7s-trash"></i>
                                            Excluir Emprestimos</a>
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

    <html lang="en" class=" -webkit-"><head><script src="//static.codepen.io/assets/editor/live/console_runner-ce3034e6bde3912cc25f83cccb7caa2b0f976196f2f2d52303a462c826d54a73.js"></script><script src="//static.codepen.io/assets/editor/live/css_live_reload_init-890dc39bb89183d4642d58b1ae5376a0193342f9aed88ea04330dc14c8d52f55.js"></script><meta charset="UTF-8"><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//static.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico"><link rel="mask-icon" type="" href="//static.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111"><link rel="canonical" href="https://codepen.io/andreasstorm/pen/GMgXRO">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
        <style class="cp-pen-styles">html, body {
                height: 100%;
            }

            body {
                display: grid;
                overflow: hidden;
            }

            .btn-circle-download {
                position: relative;
                height: 48px;
                width: 48px;
                margin: auto;
                border-radius: 100%;
                background: #E8EAED;
                cursor: pointer;
                overflow: hidden;
                transition: all 0.2s ease;
            }
            .btn-circle-download:after {
                content: "";
                position: relative;
                display: block;
                width: 200%;
                height: 100%;
                background-image: linear-gradient(100deg, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.25), rgba(255, 255, 255, 0));
                transform: translateX(-100%);
            }
            .btn-circle-download svg {
                stroke-width: 2;
                stroke-linecap: round;
                stroke-linejoin: round;
                fill: none;
            }
            .btn-circle-download svg#border {
                position: absolute;
                top: 0;
                left: 0;
                stroke: none;
                stroke-dasharray: 144;
                stroke-dashoffset: 144;
                transition: all 0.9s linear;
            }
            .btn-circle-download svg#arrow {
                position: absolute;
                top: 14px;
                left: 17px;
                stroke: #9098A9;
                transition: all 0.2s ease;
            }
            .btn-circle-download svg#check {
                position: absolute;
                top: 17px;
                left: 13px;
                stroke: white;
                transform: scale(0);
            }
            .btn-circle-download:hover {
                background: rgba(0, 119, 255, 0.2);
            }
            .btn-circle-download:hover #arrow path,
            .btn-circle-download:hover #arrow polyline {
                stroke: #0077FF;
            }
            .btn-circle-download.load {
                background: rgba(0, 119, 255, 0.2);
            }
            .btn-circle-download.load #arrow path,
            .btn-circle-download.load #arrow polyline {
                stroke: #0077FF;
            }
            .btn-circle-download.load #border {
                stroke: #0077FF;
                stroke-dasharray: 144;
                stroke-dashoffset: 0;
            }
            .btn-circle-download.done {
                background: #0077FF;
                animation: rubberBand 0.8s;
            }
            .btn-circle-download.done:after {
                transform: translateX(50%);
                transition: transform 0.4s ease;
                transition-delay: 0.7s;
            }
            .btn-circle-download.done #border,
            .btn-circle-download.done #arrow {
                display: none;
            }
            .btn-circle-download.done #check {
                transform: scale(1);
                transition: all 0.2s ease;
                transition-delay: 0.2s;
            }

            @keyframes rubberBand {
                from {
                    transform: scale(1, 1, 1);
                }
                30% {
                    transform: scale3d(1.15, 0.75, 1);
                }
                40% {
                    transform: scale3d(0.75, 1.15, 1);
                }
                50% {
                    transform: scale3d(1.1, 0.85, 1);
                }
                65% {
                    transform: scale3d(0.95, 1.05, 1);
                }
                75% {
                    transform: scale3d(1.05, 0.95, 1);
                }
                to {
                    transform: scale3d(1, 1, 1);
                }
            }
            .credit {
                position: fixed;
                right: 20px;
                bottom: 20px;
                transition: all 0.2s ease;
                -webkit-user-select: none;
                user-select: none;
                opacity: 0.6;
            }
            .credit img {
                width: 72px;
            }
            .credit:hover {
                transform: scale(0.95);
            }
        </style></head>


    <!-- dribbble -->

    <script>$(".btn-circle-download").click(function() {
            $(this).addClass("load");
            setTimeout(function() {
                $(".btn-circle-download").addClass("done");
            }, 1000);
            setTimeout(function() {
                $(".btn-circle-download").removeClass("load done");
            }, 5000);
        });

        //# sourceURL=pen.js
    </script>
@endsection
