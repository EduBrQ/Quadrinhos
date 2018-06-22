
<!DOCTYPE html><html lang='en' class=''>
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


    <style class="cp-pen-styles">

        .navside {
            font-size: 30px;
            right: 6px;
            bottom: 6px;
            color: black;
            background: #ccc;
            padding: 8px 16px;
            border-radius: 10px;
            position: fixed;
            cursor: pointer;
            z-index: 1000;
        }
        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 10000;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
            text-align: center;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #ffffff;
            display: block;
            transition: 0.3s
        }

        .sidenav a:hover, .offcanvas a:focus{
            color: #f1f1f1;
        }

        .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px !important;
            margin-left: 50px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }
        @media only screen and (max-width: 640px) {
            .flex-area {
                flex-flow: column;
                flex: 3 1 auto;
                display: flex;
            }
            .col3lt {
                -webkit-order: 1;
                order: 1;
            }
            .col3mid {
                -webkit-order: 2;
                order: 2;
            }
            .col3rt {
                -webkit-order: 3;
                order: 3;
            }
        }

        @media only screen and (min-width: 820px) {

            .flex-area {
                flex: 3 1 auto;
                display: flex;
                flex-flow: row;
                border: none;
                position: relative;
            }
            .col3lt {
                -webkit-order: 1;
                order: 1;
            }
            .col3mid {
                -webkit-order: 2;
                order: 2;
            }
            .col3rt {
                -webkit-order: 3;
                order: 3;
            }
        }


        .attribution {
            font-size: 18px;
            padding: 4px;
            background: #4c458b;
            color: #ffffff;
            border-top: 1px solid #ccc;
        }
        .col3lt {
            flex: 2 1 33%;
            -webkit-flex: 2 1 33%;
        }
        .col3mid {
            flex: 2 1 33%;
            -webkit-flex: 2 1 33%;
        }
        .col3rt {
            flex: 2 1 33%;
            -webkit-flex: 2 1 33%;
        }

        .bg-clip {
            position: relative;
            display: inline-block;
            margin: 1rem;
            padding: 1em .75em;
            font-size: 72px;
            font-weight: bold;
            text-align: center;
            color: #fff;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-image: url(https://rimaone.com/wp-content/uploads/2015/12/Header-rimaone.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            border: 1px solid #4c458b;
        }
        .bg-clip::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: black;
            z-index: -2;
            background-image: inherit;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .bg-clip::after {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
            z-index: -1;
            background-image: linear-gradient(rgba(0, 0, 0, 0.9) 25%, rgba(0, 0, 0, 0.8) 50%, rgba(0, 0, 0, 0.25) 100%);
            transition: opacity .5s ease-in-out;
        }
        .bg-clip:hover {
            cursor: pointer;
        }
        /*.bg-clip:hover::after, .bg-clip:hover span {
          opacity: 0;
        }*/

        .bg-clip span {
            position: absolute;
            bottom: 1rem;
            display: block;
            margin-top: 1rem;
            padding-top: .5rem;
            font-size: 16px;
            font-weight: normal;
            letter-spacing: 2px;
            text-transform: none;
            -webkit-text-fill-color: #000;
            border-top: 3px solid rgba(43, 39, 39, 0.8);
            transition: opacity .5s ease-in-out;
        }

        body {
            margin: 0;
            padding: 0;
            user-select: none;
            font: normal 28px Raleway, Arial, Helvetica, sans-serif;
        }
        .fab {
            color: #fff;
        }
        .header-fixed {
            background-color:#ffffff;
            box-shadow:0 1px 1px #ccc;
            padding: 20px 40px;
            height: 80px;
            color: #ffffff;
            box-sizing: border-box;
            top:-100px;

            -webkit-transition:top 0.3s;
            transition:top 0.3s;
        }

        .header-fixed .header-limiter {
            max-width: 1200px;
            text-align: center;
            margin: 0 auto;
        }

        /*	The header placeholder. It is displayed when the header is fixed to the top of the
            browser window, in order to prevent the content of the page from jumping up. */

        .header-fixed-placeholder{
            height: 80px;
            display: none;
        }

        /* Logo */

        .header-fixed .header-limiter h1 {
            float: left;
            font: normal 28px Raleway, Arial, Helvetica, sans-serif;
            line-height: 40px;
            margin: 0;
        }

        .header-fixed .header-limiter h1 span {
            color: #5383d3;
        }

        /* The navigation links */

        .header-fixed .header-limiter a {
            color: #000000;
            text-decoration: none;
        }

        .header-fixed .header-limiter nav {
            font:16px "Raleway", Arial, Helvetica, sans-serif;
            line-height: 40px;
            float: right;
        }

        .header-fixed .header-limiter nav a{
            display: inline-block;
            padding: 0 5px;
            text-decoration:none;
            color: #000000;
            font-weight: bold;
            opacity: 0.9;
        }

        .header-fixed .header-limiter nav a:hover{
            opacity: 1;
        }

        .header-fixed .header-limiter nav a.selected {
            color: #608bd2;
            pointer-events: none;
            opacity: 1;
        }

        /* Fixed version of the header */

        body.fixed .header-fixed {
            padding: 10px 40px;
            height: 50px;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1;
            background: #ffffff;
        }

        body.fixed .header-fixed-placeholder {
            display: block;
        }

        body.fixed .header-fixed .header-limiter h1 {
            font-size: 24px;
            line-height: 30px;
        }

        body.fixed .header-fixed .header-limiter nav {
            line-height: 28px;
            font-size: 13px;
        }


        /* Making the header responsive */

        @media all and (max-width: 600px) {

            .header-fixed {
                padding: 20px 0;
                height: 75px;
            }
            .bg-clip {
                width: 100%;
            }
            .header-fixed .header-limiter h1 {
                float: none;
                margin: -8px 0 10px;
                text-align: center;
                font-size: 24px;
                line-height: 1;
            }

            .header-fixed .header-limiter nav {
                line-height: 1;
                float:none;
            }

            .header-fixed .header-limiter nav a {
                font-size: 13px;
            }

            body.fixed .header-fixed {
                display: none;
            }

        }

        @media screen and (min-width: 768px)
            .container .jumbotron, .container-fluid .jumbotron {
                padding-right: 0px;
                padding-left: 0px;
            }

            .container .jumbotron, .container-fluid .jumbotron {
                padding-right: 0px;
                padding-left: 0px;
                border-radius: 0px;
            }
            .columns {
                max-width: 1000px;
                display: grid;
                margin: 0px auto;
            }

            .column {
                flex: 1;
                box-shadow: 0px 0px 10px #e0e0e0;
                margin: 10px;
                padding: 10px;
                background: #fff;
                font-family: "segoe ui",sans-serif;
            }
            /*.column:first-child {
              margin-left: 0;
            }
            .column:last-child {
              margin-right: 0;
            }*/

            @media screen and (max-width: 980px) {
                .columns .column {
                    margin-bottom: 5px;
                    flex-basis: 40%;
                }
                .columns .column:nth-last-child(2) {
                    margin-right: 0;
                }
                .columns .column:last-child {
                    flex-basis: 100%;
                    margin: 0;
                }
            }
            @media screen and (max-width: 680px) {
                .columns .column {
                    flex-basis: 100%;
                    margin: 0 5px 5px 5px;
                }
            }

            .jumbotron {
                padding-top: 0px;
                padding-bottom: 30px;
                margin-bottom: 30px;
                color: inherit;
                background: #f0f8ff;
            }
            .jumbotron p {
                font-size: 18px;
                font-weight: 400;
            }
            h1{
                color: white;
                font-size: 2em;
            }
            h3{
                color: white;
                font-size: 1em;
            }
            .hero {
                background-image: url(https://rimaone.com/wp-content/uploads/2015/12/Header-rimaone.jpg);
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center center;
                padding: 50px 0;
                min-height: 320px;
                position: relative;
            }
            .hero-content {
                position: relative;
                top: 50%;
                bottom: 50%;
                width: 100%;
                text-align: center;
            }
            main {
                min-height: 500px;
                background: aliceblue;
                padding: 50px 0;
            }

            footer {
                position: relative;
                background-color: #4c458b;
                bottom: 0;
                right: 0;
                left: 0;
                font-family: "Segoe UI",'Arial', sans-serif;
                font-size: 11px;
            }
            footer .inner {
                display: flex;
            }
            footer .copyright {
                display: flex;
                align-items: center;
                justify-content: flex-start;
                width: 20%;
                color: #fff;
                font-size: 1.8em;
                font-weight: bold;
            }
            footer .meta {
                display: flex;
                justify-content: flex-end;
                align-items: center;
                width: 80%;
            }
            footer .meta ul {
                list-style-type: none;
                color: #fff;
            }
            footer .meta .links {
                display: flex;
                justify-content: space-evenly;
                margin-right: 20px;
                font-size: 1.8em;
                width: 70%;
                font-weight: bold;
            }
            footer .meta .icons {
                display: flex;
                justify-content: space-around;
                font-family: 'FontAwesome';
                width: 20%;
            }

            @media screen and (max-width: 645px) {
                footer .copyright {
                    align-items: flex-end;
                }
                footer .meta {
                    flex-direction: column;
                    align-items: flex-end;
                }
                footer .meta .links {
                    order: 2;
                    width: 80%;
                    justify-content: space-between;
                    margin: 10px 0 0 0;
                }
                footer .meta .icons {
                    order: 1;
                    width: 100%;
                    justify-content: flex-end;
                }
                footer .meta .icons li:not(:last-child) {
                    margin: 0 20px 0 0;
                }
            }
            @media screen and (max-width: 450px) {
                footer .inner {
                    flex-direction: column;
                }
                footer .copyright {
                    position: relative;
                    margin: 0 0 20px 0;
                    width: 100%;
                    align-items: flex-start;
                }
                footer .copyright:after {
                    content: "";
                    position: absolute;
                    margin: 10px 0 0 0;
                    height: 1px;
                    left: 0;
                    right: 0;
                    background-color: #505050;
                }
                footer .meta {
                    margin: 15px 0 0 0;
                    width: 100%;
                    flex-direction: row;
                }
                footer .meta .links {
                    margin: 0;
                    order: 1;
                    align-items: flex-start;
                    flex-direction: column;
                }
                footer .meta .links li:not(:last-child) {
                    margin: 0 0 15px 0;
                }
                footer .meta .icons {
                    order: 2;
                    flex-direction: column;
                    justify-content: space-between;
                    align-items: flex-end;
                }
                footer .meta .icons li:not(:last-child) {
                    margin: 0 0 15px 0;
                }
            }
            .container {
                background: aliceblue;
                width: 100%;
            }
            .links a{
                color: #fff;
                font-family: "Raleway",sans-serif;
            }
            .row {
                padding: 20px 40px 20px 40px;
                margin: 0 auto;
            }
            .outer {
                font-weight: 100;
                text-transform: uppercase;
                letter-spacing: 0.2em;
                text-shadow: 0px 2px 1px #aaa;
                font-size: 2em;
                position: relative;
                background-color: rgba(255, 255, 255, 0.6);
                padding: 40px;
                box-shadow: 0px 12px 20px rgba(0, 0, 0, 0.2);
            }
            .outer .outer-content {
                z-index: 1;
            }
            .outer .outer-corner {
                height: 40px;
                width: 40px;
                border-right: 5px solid rgba(255, 255, 255, 0.5);
                border-top: 5px solid white;
                position: absolute;
                right: -30px;
                top: -30px;
            }

            .main {
                background: linear-gradient(to bottom, transparent, white 40px);
                transform: translateY(-40px);
                box-shadow: 0px 12px 20px rgba(0, 0, 0, 0.2);
                position: relative;
            }
            .main p {
                margin: 0px;
                font-weight: 300;
            }
            .main p.st {
                margin-top: 20px;
                margin-bottom: 5px;
                font-weight: 700;
            }
            .main p.st:first-of-type {
                margin-top: 0px;
            }
            .main .pd {
                padding: 40px;
            }
            .main .map {
                width: 200px;
                height: 200px;
                background: url("https://s32.postimg.org/rienefced/Ultra_Light_with_Labels_Snazzy_Maps_Free_Sty.png");
                background-size: 220%;
                -webkit-filter: contrast(100%);
                position: absolute;
                right: -20px;
                top: 20px;
                box-shadow: 0px 12px 20px rgba(0, 0, 0, 0.2);
            }
            .main .img {
                position: absolute;
                bottom: 0;
                -webkit-filter: grayscale(100%);
                filter: grayscale(100%);
                background: url(https://images.unsplash.com/photo-1452110040644-6751c0c95836?crop=entropy&dpr=2&fit=crop&fm=jpg&h=825&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450);
                background-size: cover;
                width: 100%;
                height: 10px;
            }
            .main .main-outer {
                height: 40px;
                width: 40px;
                border-left: 5px solid rgba(255, 255, 255, 0.5);
                border-bottom: 5px solid white;
                position: absolute;
                left: -30px;
                bottom: -30px;
            }
        }
    </style></head><body>

<body>
<!-- MAIN CONTENT HERE -->

<section class="hero">
    <div class="hero-content">

        <h1>Teca Master</h1>
        <h3>Mantenha suas Coleções</h3>
    </div>
</section>



<main>
    <div class="container">

        <div class="jumbotron text-center">
            <h1>Opções Disponíveis</h1>


            <section class="contained">

                <div class="bg-clip">
                    Coleções de Mangá
                    <span>DB | Naruto | Bleach</span>
                </div>
                <div class="bg-clip" style="background-image: url('https://rimaone.com/wp-content/uploads/2015/12/Header-rimaone.jpg')">
                    Coleções de HQ
                    <span>Marvel & DC Commics</span>
                </div>
                <div class="bg-clip">
                    Coleções de Revistas
                    <span>Programming | Marketing | Technology</span>
                </div>
                <div class="bg-clip" style="background-image: url('https://rimaone.com/wp-content/uploads/2015/12/Header-rimaone.jpg')">
                    Coleções de Filmes
                    <span>Marvel | DC | Warner</span>
                </div>
                <div class="bg-clip">
                    Coleções de Jogos
                    <span>Sony | Microsoft | Nintendo</span>
                </div>
                <div class="bg-clip" style="background-image: url('https://rimaone.com/wp-content/uploads/2015/12/Header-rimaone.jpg')">
                    Coleções de Action Figures
                    <span></span>
                </div>

            </section>

        </div>

    </div>
</main>


<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="/">Home</a>
    <a href="/colecoes">Coleções</a>
    <a href="/amigos">Amigos</a>
    <a href="/emprestimos">Emprestimos</a>
</div>

<footer>
    <div class="row inner">
    <span class="copyright">
      ©copyright 2018 TecaMaster
    </span>

        <span class="meta">
      <ul class="links">
        <a href="/">Home</a>
        <a href="/colecoes">Coleções</a>
        <a href="/amigos">Amigos</a>
        <a href="/emprestimos">Emprestimos</a>
      </ul>
      <ul class="icons">
        <li>
          <i class="fa fa-facebook" href="https://www.facebook.com/eduardo.borba3"></i>
        </li>
        <li>
          <i class="fa fa-github" href=""></i>
        </li>
        <li>
          <i class="fa fa-linkedin" href="https://www.linkedin.com/in/eduardo-queiroz-78aa83150/"></i>
        </li>
      </ul>
    </span>
    </div>
</footer>
<!--
Do not remove below content OR site will break.
-->
<div class="attribution"><p>Website designed and developed by <strong><a href="https://www.linkedin.com/in/eduardo-queiroz-78aa83150/" style="color:#ffffff;">Eduardo Borba</a></strong></p></div>
<span class="navside" onclick="openNav()">☰</span>

</body>

<script >
    $(document).ready(function(){

        var showHeaderAt = 60;

        var win = $(window),
            body = $('body');

        // Show the fixed header only on larger screen devices

        if(win.width() > 400){

            // When we scroll more than 150px down, we set the
            // "fixed" class on the body element.

            win.on('scroll', function(e){

                if(win.scrollTop() > showHeaderAt) {
                    body.addClass('fixed');
                }
                else {
                    body.removeClass('fixed');
                }
            });

        }

    });


    function openNav() {
        document.getElementById("mySidenav").style.width = "100%";
        document.getElementById("main").style.marginLeft = "100%";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        document.body.style.backgroundColor = "white";
    }

    //# sourceURL=pen.js
</script>
</body></html>