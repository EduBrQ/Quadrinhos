@extends('layouts.app')


<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
            font-family: Bahnschrift;

        }

        .title {
            color: grey;
            font-size: 18px;
        }

        button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        a {
            text-decoration: none;
            font-size: 22px;
            color: black;
        }

        button:hover, a:hover {
            opacity: 0.7;
        }

    </style>
</head>
<body style="background: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#cbccc8)) fixed;">

<div>
<div class="card">
    <img src="/uploads/avatars/{{ $user->avatar }}" alt="Usuario" style="width:100%">
    <h1>{{ $user->name }}</h1>
    <p class="title">{{ $user->email }}</p>
    <p>[83]987412668</p>
    <form class="pull-center" style=" height:80px;  " enctype="multipart/form-data" action="/profile" method="POST">

        <input style="height:30px;" class="pull-center btn btn-sm btn-primary" type="file" name="avatar">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <input type="submit" class="pull-center btn btn-sm btn-primary">
    </form>

    <div style="margin: 24px 0;">

        <a style="color: black" href="https://github.com/EduBrQ"><i class="fa fa-github"></i></a>
        <a style="color: #1D62F0 " href="https://www.linkedin.com/in/eduardo-queiroz-78aa83150/"><i class="fa fa-linkedin"></i></a>
        <a style="color: #ff290c" href="#"><i class="fa fa-google"></i></a>
        <a style="color: blue" href="https://www.facebook.com/eduardo.borba3"><i class="fa fa-facebook"></i></a>

    </div>
    <p><button>Contatos</button></p>
</div>
</div>
</body>

