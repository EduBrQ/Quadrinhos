<html lang="en" class=""><head><script src="//static.codepen.io/assets/editor/live/console_runner-ce3034e6bde3912cc25f83cccb7caa2b0f976196f2f2d52303a462c826d54a73.js"></script><script src="//static.codepen.io/assets/editor/live/css_live_reload_init-890dc39bb89183d4642d58b1ae5376a0193342f9aed88ea04330dc14c8d52f55.js"></script><meta charset="UTF-8"><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//static.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico"><link rel="mask-icon" type="" href="//static.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111"><link rel="canonical" href="https://codepen.io/emoreno911/pen/yXvZxd">

    <link rel="stylesheet prefetch" href="https://fonts.googleapis.com/css?family=Roboto:100,400"><link rel="stylesheet prefetch" href="https://fonts.googleapis.com/css?family=Khula"><link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <style class="cp-pen-styles">:root {
            --app-bg: url(http://rollingstone.uol.com.br/static/media/images/original/2015/05/22/img-1031584-dragon-ball.jpg);
        }

        html {
            height: 100%;
        }

        body {
            background-color: #af8300;
            font-family: 'Segoe UI', 'Roboto', Tahoma;
            background-color: black;
            display: flex;
            align-items: center;
            background-size: cover;
            height: 100%;
            overflow: hidden;
        }

        h1, h2, h3, h4 {
            font-weight: 400;
        }

        .wrapper {
            width: 800px;
            height: 600px;



        }

        .main-wrap {
            opacity: 0.98;
            position: relative;
            background-color: #f8f8f8;
            height: 100%;
            width: calc(1100px);
            margin-left: 250px;
            overflow: hidden;
        }

        .main {
            display: flex;
            width: calc(1100px + 400px);
            height: 100%;
        }

        .list,
        .checkout {
            position: relative;
            width: calc(100%);
        }

        header {
            position: fixed;
            background-color: #f8f8f8;
            width: 1000px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 10;
        }

        header ul li {
            list-style: none;
            float: left;
            margin-right: 15px;
            opacity: 0;
            transition: all .2s ease-in;
            color: #999;
            font-weight: 400;
            cursor: pointer;
        }

        header ul li:hover,
        header ul li.selected {
            color: #795548;
            font-weight: 600;
        }

        .content {
            padding: 0 0 20px 25px;
            margin-top: 70px;
            position: relative;
            transition: all .4s ease;
        }

        .content h3 {
            margin-top: 30px;
            margin-bottom: 15px;
        }

        ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        ul.covers li {
            display: inline-block;
            margin-right: 10px;
            margin-bottom: 20px;
            vertical-align: top;
            border: solid 1px rgba(0, 0, 0, 0.2);
            padding: 5px;
            border-radius: 2px;
            box-shadow: 0px 2px 10px 0px rgba(0, 0, 0, 0.25);
            cursor: pointer;
            width: 140px;
            transform: translateY(100px);
            opacity: 0;
            position: relative;
            top: 0;
            transition: all .5s ease;
        }

        /*ul.covers li:hover {
          transition-delay: 300ms !important;
          box-shadow: 0px 4px 10px 2px rgba(0, 0, 0, 0.25);
          top: -5px;
        }*/
        ul.covers li > * {
            display: block;
        }

        ul.covers li img {
            height: 200px;
            width: 140px;
            background-color: #607D8B;
            background-size: cover;
            transition: all .8s ease;
        }

        ul.covers li span {
            font-size: 14px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        ul.covers li small {
            color: #666;
            font-size: 11px;
        }

        .checkout {
            display: flex;
            padding: 15px;
            width: calc(50% - 80px);
        }

        .checkout .sinopsis {
            width: 220px;
        }

        .checkout img.cover {
            height: 320px;
            width: 220px;
            background-position: center;
            background-size: cover;
        }

        .sinopsis h3,
        .sinopsis p {
            margin: 5px 0;
        }

        .sinopsis h3 {
            color: #af8300;
        }

        .sinopsis p {
            font-size: 14px;
        }

        .sinopsis small {
            color: #999;
        }

        .checkout section {
            padding-left: 15px;
        }

        .checkout .screen {
            height: 15px;
            background-color: #e1cfba;
            font-size: 12px;
            text-align: center;
            margin-top: 8px;
        }

        .checkout .seats {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 30px;
        }

        .checkout .seat {
            margin: 2px;
            padding: 3px;
            background: #c3b1a3;
            color: white;
            border-radius: 2px;
            width: 19px;
            text-align: center;
            cursor: pointer;
            transition: all .4s ease;
        }

        .checkout .seat.aisle-right {
            margin-right: 10px;
        }

        .checkout .seat.aisle-left {
            margin-left: 10px;
        }

        .checkout .seat.aisle-top {
            margin-top: 10px;
        }

        .checkout .total button {
            border: none;
            border-radius: 2px;
            color: #fff;
            background-color: #666;
            width: 280px;
            height: 32px;
            display: block;
            margin-top: 10px;
            font-size: 14px;
            outline: none;
            text-transform: uppercase;
            cursor: pointer;
            transition: all .6s ease;
        }

        .checkout .total button.success {
            background-color: #81b383;
        }

        .checkout .legend {
            float: right;
            text-align: right;
            margin-right: 15px;
        }

        .checkout .legend li:after {
            content: "";
            display: inline-block;
            width: 16px;
            height: 16px;
            background-color: #c3b1a3;
            border-radius: 2px;
            position: relative;
            right: -5px;
            top: 3px;
        }

        .checkout .seat.taken,
        .checkout .legend li:last-child:after {
            background-color: #666;
        }

        .checkout .seat.selected {
            background-color: #b58300;
        }

        .checkout .total {
            position: absolute;
            bottom: 20px;
            right: 17px;
            text-align: right;
        }

        .checkout .total span {
            font-size: 32px;
            color: #af8300;
            margin-left: 8px;
        }

        /***PAGE_TRANSITIONS***/
        header.loaded ul li {
            transform: translateX(0);
            opacity: 1;
        }

        ul.covers.loaded li {
            transform: translateY(0);
            opacity: 1;
        }

        .main.page2 {
            transform: translateX(-550px);
        }

        .checkout > * {
            transition: all .8s ease;
            opacity: 0;
        }

        .checkout .sinopsis {
            transform: translateY(-600px);
        }

        .checkout section {
            transform: translateX(300px);
        }

        .checkout .total {
            transform: translateY(300px);
        }

        .page2 .checkout .sinopsis {
            transform: translateX(0);
            opacity: 1;
        }

        .page2 .checkout section {
            transform: translateX(0);
            opacity: 1;
        }

        .page2 .checkout .total {
            transform: translateY(0);
            opacity: 1;
        }

        /*.page2 .covers li {
          transform: translateY(100px);
          opacity: 0;
        }*/
        /*******/
        .side {
            position: relative;
            background-color: rgba(229, 229, 229, 0.7);
            float: left;
            width: 250px;
            height: 100%;
        }

        .side h3 {
            font-family: 'Khula','Segoe UI', cursive;
            font-size: 32px;
            margin: 15px 5px 0px;
            color: #795548;
            text-shadow: 1px 2px 4px rgba(0, 0, 0, 0.4);
        }

        .side > div,
        .side > input {
            margin: 5px 10px;
        }

        .side i:before {
            font-size: 18px;
            margin-right: 10px;
        }

        .search {
            width: calc(100% - 35px);
            padding: 8px 5px;
            border: solid 2px #777;
            outline: none;
        }

        ul.menu {
            margin: 15px 0;
        }

        ul.menu li {
            padding: 10px;
            padding-left: 15px;
            color: #444;
            cursor: pointer;
        }

        ul.menu li:hover,
        ul.menu li.selected {
            border-left: #795548 solid 3px;
            color: #795548;
            font-weight: 500;
            transition: all .1s ease;
        }

        ul.menu li:nth-child(7) {
            box-shadow: 0 2px 2px rgba(0, 0, 0, 0.15);
        }

        .side div.bg {
            position: absolute;
            height: 100%;
            width: 100%;
            background: #af8300 no-repeat center center fixed;
            background-color: black;
            background-size: cover;
            background-position: 0px 0px;
            /**important + cover**/
            filter: blur(5px);
            padding: 0;
            margin: 0;
            z-index: -1;
        }

        .scroll {
            width: 36px;
            position: absolute;
            right: 0;
            top: 68px;
            z-index: 10;
        }

        .scroll button {
            border: none;
            background-color: transparent;
            outline: none;
            display: block;
            margin-bottom: 8px;
            cursor: pointer;
        }

        .scroll button:first-child {
            margin-bottom: 470px;
        }

        .scroll i {
            font-size: 20px;
            transform: rotate(90deg);
            color: #af8300;
        }

        .scroll button:hover i {
            color: #666;
            font-weight: 500;
        }

        button.back {
            border: none;
            background-color: transparent;
            outline: none;
            margin-bottom: 8px;
            cursor: pointer;
        }

        button.back i {
            font-size: 24px;
            color: #666;
        }

        .covers.up li:nth-child(1) {
            transition-delay: 950ms;
        }

        .covers.up li:nth-child(2) {
            transition-delay: 900ms;
        }

        .covers.up li:nth-child(3) {
            transition-delay: 850ms;
        }

        .covers.up li:nth-child(4) {
            transition-delay: 800ms;
        }

        .covers.up li:nth-child(5) {
            transition-delay: 750ms;
        }

        .covers.up li:nth-child(6) {
            transition-delay: 700ms;
        }

        .covers.up li:nth-child(7) {
            transition-delay: 650ms;
        }

        .covers.up li:nth-child(8) {
            transition-delay: 600ms;
        }

        .covers.up li:nth-child(9) {
            transition-delay: 550ms;
        }

        .covers.up li:nth-child(10) {
            transition-delay: 500ms;
        }

        .covers.up li:nth-child(11) {
            transition-delay: 450ms;
        }

        .covers.up li:nth-child(12) {
            transition-delay: 400ms;
        }

        .covers.up li:nth-child(13) {
            transition-delay: 350ms;
        }

        .covers.up li:nth-child(14) {
            transition-delay: 300ms;
        }

        .covers.up li:nth-child(15) {
            transition-delay: 250ms;
        }

        .covers.up li:nth-child(16) {
            transition-delay: 200ms;
        }

        .covers.up li:nth-child(17) {
            transition-delay: 150ms;
        }

        .covers.up li:nth-child(18) {
            transition-delay: 100ms;
        }

        .covers.up li:nth-child(19) {
            transition-delay: 50ms;
        }

        .covers.up li:nth-child(20) {
            transition-delay: 0ms;
        }

        .covers li:nth-child(1) {
            transition-delay: 50ms;
        }

        .covers li:nth-child(2) {
            transition-delay: 100ms;
        }

        .covers li:nth-child(3) {
            transition-delay: 150ms;
        }

        .covers li:nth-child(4) {
            transition-delay: 200ms;
        }

        .covers li:nth-child(5) {
            transition-delay: 250ms;
        }

        .covers li:nth-child(6) {
            transition-delay: 300ms;
        }

        .covers li:nth-child(7) {
            transition-delay: 350ms;
        }

        .covers li:nth-child(8) {
            transition-delay: 400ms;
        }

        .covers li:nth-child(9) {
            transition-delay: 450ms;
        }

        .covers li:nth-child(10) {
            transition-delay: 500ms;
        }

        .covers li:nth-child(11) {
            transition-delay: 550ms;
        }

        .covers li:nth-child(12) {
            transition-delay: 600ms;
        }

        .covers li:nth-child(13) {
            transition-delay: 650ms;
        }

        .covers li:nth-child(14) {
            transition-delay: 700ms;
        }

        .covers li:nth-child(15) {
            transition-delay: 750ms;
        }

        .covers li:nth-child(16) {
            transition-delay: 800ms;
        }

        .covers li:nth-child(17) {
            transition-delay: 850ms;
        }

        .covers li:nth-child(18) {
            transition-delay: 900ms;
        }

        .covers li:nth-child(19) {
            transition-delay: 950ms;
        }

        .covers li:nth-child(20) {
            transition-delay: 1000ms;
        }

        header li:nth-child(6) {
            transition-delay: 50ms;
        }

        header li:nth-child(5) {
            transition-delay: 100ms;
        }

        header li:nth-child(4) {
            transition-delay: 150ms;
        }

        header li:nth-child(3) {
            transition-delay: 200ms;
        }

        header li:nth-child(2) {
            transition-delay: 250ms;
        }

        header li:nth-child(1) {
            transition-delay: 300ms;
        }

        /** Loader **/
        .loader,
        .loader:before,
        .loader:after {
            border-radius: 50%;
            width: 1.8em;
            height: 1.8em;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation: load7 1.8s infinite ease-in-out;
            animation: load7 1.8s infinite ease-in-out;
        }

        .loader {
            display: none;
            color: #666;
            font-size: 10px;
            margin: 5px auto;
            position: relative;
            text-indent: -9999em;
            -webkit-transform: translateZ(0);
            -ms-transform: translateZ(0);
            transform: translateZ(0);
            -webkit-animation-delay: -0.16s;
            animation-delay: -0.16s;
            position: relative;
            top: -15px;
        }

        .loader:before,
        .loader:after {
            content: '';
            position: absolute;
            top: 0;
        }

        .loader:before {
            left: -3.5em;
            -webkit-animation-delay: -0.32s;
            animation-delay: -0.32s;
        }

        .loader:after {
            left: 3.5em;
        }

        @-webkit-keyframes load7 {
            0%,
            80%,
            100% {
                box-shadow: 0 2.5em 0 -1.3em;
            }
            40% {
                box-shadow: 0 2.5em 0 0;
            }
        }
        @keyframes load7 {
            0%,
            80%,
            100% {
                box-shadow: 0 2.5em 0 -1.3em;
            }
            40% {
                box-shadow: 0 2.5em 0 0;
            }
        }
    </style></head><body>
<div class="wrapper">

    <div class="main-wrap">
        <div class="main">
            <div class="list">
                <div class="scroll">
                    <button class="scrollTop"><i class="zmdi zmdi-arrow-left"></i></button>
                    <button class="scrollDown"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
                <header class="loaded">
                    <ul class="filter">
                        <li data-gid="," class="selected">Todos</li>
                        <li data-gid="28">HQ's</li>
                        <li data-gid="12">Mangás</li>
                        <li data-gid="35">Animes</li>
                        <li data-gid="18">Filmes</li>
                        <li data-gid="18">Jogos</li>
                    </ul>
                </header>
                <div class="content">
                    <ul class="covers loaded">
                        <li data-index="0">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8zw8AAhMBENYXhyAAAAAASUVORK5CYII=" style="background-image: url(https://image.tmdb.org/t/p/w300//gfJGlDaHuWimErCr5Ql0I8x9QSy.jpg)">
                            <span>Wonder Woman</span><small>16:00 (2h 15m)</small>
                        </li>

                        <li data-index="1">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8zw8AAhMBENYXhyAAAAAASUVORK5CYII=" style="background-image: url(https://image.tmdb.org/t/p/w300//9EXnebqbb7dOhONLPV9Tg2oh2KD.jpg)">
                            <span>Logan</span><small>16:00 (2h 15m)</small>
                        </li>

                        <li data-index="2">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8zw8AAhMBENYXhyAAAAAASUVORK5CYII=" style="background-image: url(https://image.tmdb.org/t/p/w300//tWqifoYuwLETmmasnGHO7xBjEtt.jpg)">
                            <span>Beauty and the Beast</span><small>16:00 (2h 15m)</small>
                        </li>

                        <li data-index="3">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8zw8AAhMBENYXhyAAAAAASUVORK5CYII=" style="background-image: url(https://image.tmdb.org/t/p/w300//f8Ng1Sgb3VLiSwAvrfKeQPzvlfr.jpg)">
                            <span>Transformers: The Last Knight</span><small>16:00 (2h 15m)</small>
                        </li>

                        <li data-index="4">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8zw8AAhMBENYXhyAAAAAASUVORK5CYII=" style="background-image: url(https://image.tmdb.org/t/p/w300//zxkY8byBnCsXodEYpK8tmwEGXBI.jpg)">
                            <span>The Mummy</span><small>16:00 (2h 15m)</small>
                        </li>

                        <li data-index="5">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8zw8AAhMBENYXhyAAAAAASUVORK5CYII=" style="background-image: url(https://image.tmdb.org/t/p/w300//xbpSDU3p7YUGlu9Mr6Egg2Vweto.jpg)">
                            <span>Pirates of the Caribbean: Dead Men Tell No Tales</span><small>16:00 (2h 15m)</small>
                        </li>

                        <li data-index="6">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8zw8AAhMBENYXhyAAAAAASUVORK5CYII=" style="background-image: url(https://image.tmdb.org/t/p/w300//y31QB9kn3XSudA15tV7UWQ9XLuW.jpg)">
                            <span>Guardians of the Galaxy</span><small>16:00 (2h 15m)</small>
                        </li>

                        <li data-index="7">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8zw8AAhMBENYXhyAAAAAASUVORK5CYII=" style="background-image: url(https://image.tmdb.org/t/p/w300//r2517Vz9EhDhj88qwbDVj8DCRZN.jpg)">
                            <span>Kong: Skull Island</span><small>16:00 (2h 15m)</small>
                        </li>

                        <li data-index="8">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8zw8AAhMBENYXhyAAAAAASUVORK5CYII=" style="background-image: url(https://image.tmdb.org/t/p/w300//zkXnKIwX5pYorKJp2fjFSfNyKT0.jpg)">
                            <span>John Wick: Chapter 2</span><small>16:00 (2h 15m)</small>
                        </li>

                        <li data-index="9">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8zw8AAhMBENYXhyAAAAAASUVORK5CYII=" style="background-image: url(https://image.tmdb.org/t/p/w300//nBNZadXqJSdt05SHLqgT0HuC5Gm.jpg)">
                            <span>Interstellar</span><small>16:00 (2h 15m)</small>
                        </li>

                        <li data-index="10">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8zw8AAhMBENYXhyAAAAAASUVORK5CYII=" style="background-image: url(https://image.tmdb.org/t/p/w300//h2mhfbEBGABSHo2vXG1ECMKAJa7.jpg)">
                            <span>Life</span><small>16:00 (2h 15m)</small>
                        </li>

                        <li data-index="11">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8zw8AAhMBENYXhyAAAAAASUVORK5CYII=" style="background-image: url(https://image.tmdb.org/t/p/w300//5vHssUeVe25bMrof1HyaPyWgaP.jpg)">
                            <span>John Wick</span><small>16:00 (2h 15m)</small>
                        </li>

                        <li data-index="12">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8zw8AAhMBENYXhyAAAAAASUVORK5CYII=" style="background-image: url(https://image.tmdb.org/t/p/w300//tkt9xR1kNX5R9rCebASKck44si2.jpg)">
                            <span>Pirates of the Caribbean: The Curse of the Black Pearl</span><small>16:00 (2h 15m)</small>
                        </li>

                        <li data-index="13">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8zw8AAhMBENYXhyAAAAAASUVORK5CYII=" style="background-image: url(https://image.tmdb.org/t/p/w300//jjBgi2r5cRt36xF6iNUEhzscEcb.jpg)">
                            <span>Jurassic World</span><small>16:00 (2h 15m)</small>
                        </li>

                        <li data-index="14">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8zw8AAhMBENYXhyAAAAAASUVORK5CYII=" style="background-image: url(https://image.tmdb.org/t/p/w300//ykIZB9dYBIKV13k5igGFncT5th6.jpg)">
                            <span>Transformers: Age of Extinction</span><small>16:00 (2h 15m)</small>
                        </li>

                        <li data-index="15">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8zw8AAhMBENYXhyAAAAAASUVORK5CYII=" style="background-image: url(https://image.tmdb.org/t/p/w300//kqjL17yufvn9OVLyXYpvtyrFfak.jpg)">
                            <span>Mad Max: Fury Road</span><small>16:00 (2h 15m)</small>
                        </li>

                        <li data-index="16">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8zw8AAhMBENYXhyAAAAAASUVORK5CYII=" style="background-image: url(https://image.tmdb.org/t/p/w300//zV5rpeTzUJ7QpA3NC4iidlwXssU.jpg)">
                            <span>Power Rangers</span><small>16:00 (2h 15m)</small>
                        </li>

                        <li data-index="17">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8zw8AAhMBENYXhyAAAAAASUVORK5CYII=" style="background-image: url(https://image.tmdb.org/t/p/w300//ewVHnq4lUiovxBCu64qxq5bT2lu.jpg)">
                            <span>Alien: Covenant</span><small>16:00 (2h 15m)</small>
                        </li>

                        <li data-index="18">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8zw8AAhMBENYXhyAAAAAASUVORK5CYII=" style="background-image: url(https://image.tmdb.org/t/p/w300//rXMWOZiCt6eMX22jWuTOSdQ98bY.jpg)">
                            <span>Split</span><small>16:00 (2h 15m)</small>
                        </li>

                        <li data-index="19">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8zw8AAhMBENYXhyAAAAAASUVORK5CYII=" style="background-image: url(https://image.tmdb.org/t/p/w300//y4MBh0EjBlMuOzv9axM4qJlmhzz.jpg)">
                            <span>Guardians of the Galaxy Vol. 2</span><small>16:00 (2h 15m)</small>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="checkout">
                <div class="sinopsis">
                    <button class="back">
                        <i class="zmdi zmdi-arrow-left"></i>
                    </button>
                    <img class="cover" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8zw8AAhMBENYXhyAAAAAASUVORK5CYII=" style="background-image: url(https://image.tmdb.org/t/p/w300//gfJGlDaHuWimErCr5Ql0I8x9QSy.jpg)">
                    <h3>Wonder Woman</h3>
                    <p>An Amazon princess comes to the world of Man to become the greatest of the female superheroes.</p>
                    <span>Wed, 28 Jun </span>
                    <small>16:00 (2h 15m)</small>
                </div>
                <section>
                    <ul class="legend">
                        <li>available</li>
                        <li>taken</li>
                    </ul>
                    <span>Select your seats</span>
                    <div class="seats"><div class="seat taken ">A1</div><div class="seat  aisle-right">A2</div><div class="seat  ">A3</div><div class="seat  ">A4</div><div class="seat  ">A5</div><div class="seat  ">A6</div><div class="seat taken ">A7</div><div class="seat taken aisle-left">A8</div><div class="seat  ">A9</div><div class="seat  ">B1</div><div class="seat  aisle-right">B2</div><div class="seat  ">B3</div><div class="seat taken ">B4</div><div class="seat  ">B5</div><div class="seat taken ">B6</div><div class="seat  ">B7</div><div class="seat  aisle-left">B8</div><div class="seat  ">B9</div><div class="seat taken ">C1</div><div class="seat  aisle-right">C2</div><div class="seat  ">C3</div><div class="seat taken ">C4</div><div class="seat  ">C5</div><div class="seat  ">C6</div><div class="seat taken ">C7</div><div class="seat  aisle-left">C8</div><div class="seat  ">C9</div><div class="seat  ">D1</div><div class="seat taken aisle-right">D2</div><div class="seat  ">D3</div><div class="seat taken ">D4</div><div class="seat  ">D5</div><div class="seat  ">D6</div><div class="seat  ">D7</div><div class="seat  aisle-left">D8</div><div class="seat taken ">D9</div><div class="seat taken ">E1</div><div class="seat  aisle-right">E2</div><div class="seat  ">E3</div><div class="seat  ">E4</div><div class="seat  ">E5</div><div class="seat  ">E6</div><div class="seat taken ">E7</div><div class="seat  aisle-left">E8</div><div class="seat  ">E9</div><div class="seat  ">F1</div><div class="seat  aisle-right">F2</div><div class="seat  ">F3</div><div class="seat taken ">F4</div><div class="seat taken ">F5</div><div class="seat  ">F6</div><div class="seat  ">F7</div><div class="seat  aisle-left">F8</div><div class="seat  ">F9</div><div class="seat taken ">G1</div><div class="seat  aisle-right">G2</div><div class="seat taken ">G3</div><div class="seat  ">G4</div><div class="seat  ">G5</div><div class="seat  ">G6</div><div class="seat taken ">G7</div><div class="seat  aisle-left">G8</div><div class="seat  ">G9</div><div class="seat taken ">H1</div><div class="seat  aisle-right">H2</div><div class="seat  ">H3</div><div class="seat taken ">H4</div><div class="seat  ">H5</div><div class="seat  ">H6</div><div class="seat  ">H7</div><div class="seat taken aisle-left">H8</div><div class="seat  ">H9</div><div class="seat taken aisle-top">I1</div><div class="seat  aisle-top">I2</div><div class="seat  aisle-top">I3</div><div class="seat  aisle-top">I4</div><div class="seat  aisle-top">I5</div><div class="seat taken aisle-top">I6</div></div>
                    <div class="screen">screen</div>
                </section>
                <div class="total">
                    <small>Total </small><span>$0</span>
                    <button>CHECKOUT</button>
                    <div class="loader"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script src="//static.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>// press f11 to full page view
    // vote for me at https://www.uplabs.com/posts/fluent-movie-booking

    tooglePage1();

    function tooglePage1() {
        $('.covers').removeClass('up');
        setTimeout(function () {
            return $('.main header').toggleClass('loaded');
        }, 50000);
        setTimeout(function () {
            return $('.covers').toggleClass('loaded');
        }, 600000);
    }

    var $covers = $('.covers');
    var scroll = 0;
    var delta = 267;

    function doScroll() {
        var scrollUp = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : false;

        var listHeight = getComputedStyle(document.querySelector('ul.covers')).getPropertyValue('height');

        if (!scrollUp && scroll < parseInt(listHeight) - delta * 2) {
            scroll += delta;
            $covers.removeClass('up').find('li').css('transform', 'translateY(-' + scroll + 'px)');
        }

        if (scrollUp && scroll >= delta) {
            scroll -= delta;
            $covers.addClass('up').find('li').css('transform', 'translateY(-' + scroll + 'px)');
        }
    }

    $('button.scrollDown').on('click', function (evt) {
        return doScroll();
    });
    $('button.scrollTop').on('click', function (evt) {
        return doScroll(true);
    });

    $('button.back').on('click', function (evt) {
        $('.main').toggleClass('page2');
        $('.total button').removeClass('success').text('CHECKOUT');
        tooglePage1();
    });

    $('.covers').on('click', 'li', function (evt) {
        var data = getData();
        var index = evt.currentTarget.getAttribute('data-index');
        var movie = data.results[parseInt(index)];
        var txt = movie.overview.length >= 220 ? movie.overview.substring(0, 220).concat('...') : movie.overview;

        var $sinopsis = $('.sinopsis');
        $sinopsis.find('h3').text(movie.title);
        $sinopsis.find('p').text(txt);
        $sinopsis.find('img').attr('src', 'https://image.tmdb.org/t/p/w300' + movie.poster_path);

        $('.main').toggleClass('page2');
        tooglePage1();
    });

    // https://image.tmdb.org/t/p/w300/w93GAiq860UjmgR6tU9h2T24vaV.jpg
    function doMoviesRender(filter) {
        var movies = getData().results;
        var moviesRender = movies.map(function (item, index) {
            var title = item.title,
                genre_ids = item.genre_ids,
                poster_path = item.poster_path,
                overview = item.overview;


            var uri = 'https://image.tmdb.org/t/p/w300/' + poster_path;
            var gid = genre_ids.toString();

            return gid.indexOf(filter) < 0 ? '' : '\n\t\t\t<li data-index="' + index + '">\n\t\t\t\t<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8zw8AAhMBENYXhyAAAAAASUVORK5CYII=" style="background-image: url(' + uri + ')">\n\t\t\t\t<span>' + title + '</span><small>16:00 (2h 15m)</small>\n\t\t\t</li>\n\t\t';
        });

        $('.covers').html(moviesRender.join(''));
    }

    doMoviesRender(',');

    var seats = [];
    var initPos = 65;
    for (var i = 0; i < 78; i++) {if (window.CP.shouldStopExecution(1)){break;}
        var row = String.fromCharCode(initPos + Math.floor(i / 9));
        var taken = i % 7 == 0 || i % 6 == 0 ? 'taken' : '';

        var aisle = i % 9 === 1 ? 'aisle-right' : i % 9 === 7 ? 'aisle-left' : '';

        if (row === 'I') aisle = 'aisle-top';

        seats.push('<div class="seat ' + taken + ' ' + aisle + '">' + row + (i % 9 + 1) + '</div>');
    }
    window.CP.exitedLoop(1);

    $('.seats').html(seats.join(''));

    $('.seats').on('click', '.seat', function (evt) {
        var $seat = $(evt.currentTarget);

        if (!$seat.hasClass('taken')) {
            $seat.toggleClass('selected');

            var $sel = $seat.parent().find('.selected');
            var qty = $sel.length * 5.44;
            $('.total span').text(('$' + qty).substring(0, 6));
        }
    });

    $('.filter li').on('click', function (evt) {
        $(evt.currentTarget).addClass('selected').siblings().removeClass('selected');
        var $covers = $('.covers').removeClass('loaded').removeClass('up');
        var filter = evt.currentTarget.getAttribute('data-gid');
        doMoviesRender(filter);
        scroll = 0;
        setTimeout(function () {
            return $covers.toggleClass('loaded');
        }, 100);
    });

    $('.total button').on('click', function (evt) {
        var $button = $(evt.currentTarget);
        var total = $('.total span').text();

        if (!$button.hasClass('success') && total !== '$0') {
            var $loader = $('.loader').show();
            $button.text('Booking...');

            setTimeout(function () {
                $loader.hide();
                $button.html('<i class="zmdi zmdi-check-circle"></i> Movie Booked');
                $button.addClass('success');
            }, 1600);
        }
    });

    /*** END OF CODE ***/

    function getData() {
        return { "page": 1, "total_results": 315519, "total_pages": 15776, "results": [{ "vote_count": 1724, "id": 297762, "video": false, "vote_average": 7, "title": "Wonder Woman", "popularity": 119.66635, "poster_path": "/gfJGlDaHuWimErCr5Ql0I8x9QSy.jpg", "original_language": "en", "original_title": "Wonder Woman", "genre_ids": [28, 12, 14, 878], "backdrop_path": "/hA5oCgvgCxj5MEWcLpjXXTwEANF.jpg", "adult": false, "overview": "An Amazon princess comes to the world of Man to become the greatest of the female superheroes.", "release_date": "2017-05-30" }, { "vote_count": 4194, "id": 263115, "video": false, "vote_average": 7.5, "title": "Logan", "popularity": 80.401638, "poster_path": "/9EXnebqbb7dOhONLPV9Tg2oh2KD.jpg", "original_language": "en", "original_title": "Logan", "genre_ids": [28, 18, 878], "backdrop_path": "/5pAGnkFYSsFJ99ZxDIYnhQbQFXs.jpg", "adult": false, "overview": "In the near future, a weary Logan cares for an ailing Professor X in a hideout on the Mexican border. But Logan's attempts to hide from the world and his legacy are upended when a young mutant arrives, pursued by dark forces.", "release_date": "2017-02-28" }, { "vote_count": 3464, "id": 321612, "video": false, "vote_average": 6.8, "title": "Beauty and the Beast", "popularity": 73.33872, "poster_path": "/tWqifoYuwLETmmasnGHO7xBjEtt.jpg", "original_language": "en", "original_title": "Beauty and the Beast", "genre_ids": [10751, 14, 10749], "backdrop_path": "/7QshG75xKCmClghQDU1ta2BTaja.jpg", "adult": false, "overview": "A live-action adaptation of Disney's version of the classic 'Beauty and the Beast' tale of a cursed prince and a beautiful young woman who helps him break the spell.", "release_date": "2017-03-16" }, { "vote_count": 240, "id": 335988, "video": false, "vote_average": 5.8, "title": "Transformers: The Last Knight", "popularity": 70.762261, "poster_path": "/f8Ng1Sgb3VLiSwAvrfKeQPzvlfr.jpg", "original_language": "en", "original_title": "Transformers: The Last Knight", "genre_ids": [28, 878, 53, 12], "backdrop_path": "/Ytv7P13rbwQ3mLpCAY8lBTqI5s.jpg", "adult": false, "overview": "In the absence of Optimus Prime, a battle for survival has commenced between the human race and the Transformers. Cade Yeager forms an alliance with Bumblebee, an English lord, and an Oxford professor to learn why the Transformers keep coming back to Earth.", "release_date": "2017-06-21" }, { "vote_count": 591, "id": 282035, "video": false, "vote_average": 5.2, "title": "The Mummy", "popularity": 57.18406, "poster_path": "/zxkY8byBnCsXodEYpK8tmwEGXBI.jpg", "original_language": "en", "original_title": "The Mummy", "genre_ids": [28, 12, 14, 27, 53], "backdrop_path": "/qedJJ2z9oBYKxxO4Pp8qAkfgPst.jpg", "adult": false, "overview": "Though safely entombed in a crypt deep beneath the unforgiving desert, an ancient queen whose destiny was unjustly taken from her is awakened in our current day, bringing with her malevolence grown over millennia, and terrors that defy human comprehension.", "release_date": "2017-06-06" }, { "vote_count": 1309, "id": 166426, "video": false, "vote_average": 6.6, "title": "Pirates of the Caribbean: Dead Men Tell No Tales", "popularity": 37.717108, "poster_path": "/xbpSDU3p7YUGlu9Mr6Egg2Vweto.jpg", "original_language": "en", "original_title": "Pirates of the Caribbean: Dead Men Tell No Tales", "genre_ids": [28, 12, 35, 14], "backdrop_path": "/tZvdyLP2F6x2TTuh292ceH87qZT.jpg", "adult": false, "overview": "Thrust into an all-new adventure, a down-on-his-luck Capt. Jack Sparrow feels the winds of ill-fortune blowing even more strongly when deadly ghost sailors led by his old nemesis, the evil Capt. Salazar, escape from the Devil's Triangle. Jack's only hope of survival lies in seeking out the legendary Trident of Poseidon, but to find it, he must forge an uneasy alliance with a brilliant and beautiful astronomer and a headstrong young man in the British navy.", "release_date": "2017-05-23" }, { "vote_count": 8105, "id": 118340, "video": false, "vote_average": 7.9, "title": "Guardians of the Galaxy", "popularity": 35.408184, "poster_path": "/y31QB9kn3XSudA15tV7UWQ9XLuW.jpg", "original_language": "en", "original_title": "Guardians of the Galaxy", "genre_ids": [28, 878, 12], "backdrop_path": "/bHarw8xrmQeqf3t8HpuMY7zoK4x.jpg", "adult": false, "overview": "Light years from Earth, 26 years after being abducted, Peter Quill finds himself the prime target of a manhunt after discovering an orb wanted by Ronan the Accuser.", "release_date": "2014-07-30" }, { "vote_count": 1843, "id": 293167, "video": false, "vote_average": 6.1, "title": "Kong: Skull Island", "popularity": 31.442202, "poster_path": "/r2517Vz9EhDhj88qwbDVj8DCRZN.jpg", "original_language": "en", "original_title": "Kong: Skull Island", "genre_ids": [28, 12, 14], "backdrop_path": "/pGwChWiAY1bdoxL79sXmaFBlYJH.jpg", "adult": false, "overview": "Explore the mysterious and dangerous home of the king of the apes as a team of explorers ventures deep inside the treacherous, primordial island.", "release_date": "2017-03-08" }, { "vote_count": 1961, "id": 324552, "video": false, "vote_average": 6.5, "title": "John Wick: Chapter 2", "popularity": 30.3182, "poster_path": "/zkXnKIwX5pYorKJp2fjFSfNyKT0.jpg", "original_language": "en", "original_title": "John Wick: Chapter 2", "genre_ids": [53, 28, 80], "backdrop_path": "/dQ6s3Ud2KoOs3LKw6xgZr1cw7Yq.jpg", "adult": false, "overview": "John Wick is forced out of retirement by a former associate looking to seize control of a shadowy international assassins’ guild. Bound by a blood oath to aid him, Wick travels to Rome and does battle against some of the world’s most dangerous killers.", "release_date": "2017-02-08" }, { "vote_count": 9253, "id": 157336, "video": false, "vote_average": 8.1, "title": "Interstellar", "popularity": 30.190706, "poster_path": "/nBNZadXqJSdt05SHLqgT0HuC5Gm.jpg", "original_language": "en", "original_title": "Interstellar", "genre_ids": [12, 18, 878], "backdrop_path": "/xu9zaAevzQ5nnrsXN6JcahLnG4i.jpg", "adult": false, "overview": "Interstellar chronicles the adventures of a group of explorers who make use of a newly discovered wormhole to surpass the limitations on human space travel and conquer the vast distances involved in an interstellar voyage.", "release_date": "2014-11-05" }, { "vote_count": 1034, "id": 395992, "video": false, "vote_average": 6.1, "title": "Life", "popularity": 29.266811, "poster_path": "/h2mhfbEBGABSHo2vXG1ECMKAJa7.jpg", "original_language": "en", "original_title": "Life", "genre_ids": [27, 878, 53], "backdrop_path": "/hES8wGmkxHa54z7hqUMpw5TIs09.jpg", "adult": false, "overview": "The six-member crew of the International Space Station is tasked with studying a sample from Mars that may be the first proof of extra-terrestrial life, which proves more intelligent than ever expected.", "release_date": "2017-03-23" }, { "vote_count": 4458, "id": 245891, "video": false, "vote_average": 6.9, "title": "John Wick", "popularity": 25.286957, "poster_path": "/5vHssUeVe25bMrof1HyaPyWgaP.jpg", "original_language": "en", "original_title": "John Wick", "genre_ids": [28, 53], "backdrop_path": "/mFb0ygcue4ITixDkdr7wm1Tdarx.jpg", "adult": false, "overview": "Ex-hitman John Wick comes out of retirement to track down the gangsters that took everything from him.", "release_date": "2014-10-22" }, { "vote_count": 5887, "id": 22, "video": false, "vote_average": 7.4, "title": "Pirates of the Caribbean: The Curse of the Black Pearl", "popularity": 23.891021, "poster_path": "/tkt9xR1kNX5R9rCebASKck44si2.jpg", "original_language": "en", "original_title": "Pirates of the Caribbean: The Curse of the Black Pearl", "genre_ids": [12, 14, 28], "backdrop_path": "/fQZQYW9Hrg8TpYZH4KgbRptkcCN.jpg", "adult": false, "overview": "Jack Sparrow, a freewheeling 17th-century pirate who roams the Caribbean Sea, butts heads with a rival pirate bent on pillaging the village of Port Royal. When the governor's daughter is kidnapped, Sparrow decides to help the girl's love save her. But their seafaring mission is hardly simple.", "release_date": "2003-07-09" }, { "vote_count": 7531, "id": 135397, "video": false, "vote_average": 6.5, "title": "Jurassic World", "popularity": 23.877628, "poster_path": "/jjBgi2r5cRt36xF6iNUEhzscEcb.jpg", "original_language": "en", "original_title": "Jurassic World", "genre_ids": [28, 12, 878, 53], "backdrop_path": "/dkMD5qlogeRMiEixC4YNPUvax2T.jpg", "adult": false, "overview": "Twenty-two years after the events of Jurassic Park, Isla Nublar now features a fully functioning dinosaur theme park, Jurassic World, as originally envisioned by John Hammond.", "release_date": "2015-06-09" }, { "vote_count": 2705, "id": 91314, "video": false, "vote_average": 5.9, "title": "Transformers: Age of Extinction", "popularity": 23.349316, "poster_path": "/ykIZB9dYBIKV13k5igGFncT5th6.jpg", "original_language": "en", "original_title": "Transformers: Age of Extinction", "genre_ids": [878, 28, 12], "backdrop_path": "/cHy7nSitAVgvZ7qfCK4JO47t3oZ.jpg", "adult": false, "overview": "As humanity picks up the pieces, following the conclusion of \"Transformers: Dark of the Moon,\" Autobots and Decepticons have all but vanished from the face of the planet. However, a group of powerful, ingenious businessman and scientists attempt to learn from past Transformer incursions and push the boundaries of technology beyond what they can control - all while an ancient, powerful Transformer menace sets Earth in his cross-hairs.", "release_date": "2014-06-25" }, { "vote_count": 8253, "id": 76341, "video": false, "vote_average": 7.2, "title": "Mad Max: Fury Road", "popularity": 23.066573, "poster_path": "/kqjL17yufvn9OVLyXYpvtyrFfak.jpg", "original_language": "en", "original_title": "Mad Max: Fury Road", "genre_ids": [28, 12, 878, 53], "backdrop_path": "/phszHPFVhPHhMZgo0fWTKBDQsJA.jpg", "adult": false, "overview": "An apocalyptic story set in the furthest reaches of our planet, in a stark desert landscape where humanity is broken, and most everyone is crazed fighting for the necessities of life. Within this world exist two rebels on the run who just might be able to restore order. There's Max, a man of action and a man of few words, who seeks peace of mind following the loss of his wife and child in the aftermath of the chaos. And Furiosa, a woman of action and a woman who believes her path to survival may be achieved if she can make it across the desert back to her childhood homeland.", "release_date": "2015-05-13" }, { "vote_count": 654, "id": 305470, "video": false, "vote_average": 6.5, "title": "Power Rangers", "popularity": 22.184089, "poster_path": "/zV5rpeTzUJ7QpA3NC4iidlwXssU.jpg", "original_language": "en", "original_title": "Power Rangers", "genre_ids": [28, 12, 878], "backdrop_path": "/gfTQaH7h09IaSZw9ubZgP2c7syr.jpg", "adult": false, "overview": "Saban's Power Rangers follows five ordinary teens who must become something extraordinary when they learn that their small town of Angel Grove — and the world — is on the verge of being obliterated by an alien threat. Chosen by destiny, our heroes quickly discover they are the only ones who can save the planet. But to do so, they will have to overcome their real-life issues and before it’s too late, band together as the Power Rangers.", "release_date": "2017-03-23" }, { "vote_count": 1203, "id": 126889, "video": false, "vote_average": 5.8, "title": "Alien: Covenant", "popularity": 20.568775, "poster_path": "/ewVHnq4lUiovxBCu64qxq5bT2lu.jpg", "original_language": "en", "original_title": "Alien: Covenant", "genre_ids": [27, 878, 53], "backdrop_path": "/kMU8trT43p5LFoJ4plIySMOsZ1T.jpg", "adult": false, "overview": "Bound for a remote planet on the far side of the galaxy, the crew of the colony ship Covenant discovers what they think is an uncharted paradise, but is actually a dark, dangerous world — whose sole inhabitant is the “synthetic” David, survivor of the doomed Prometheus expedition.", "release_date": "2017-05-09" }, { "vote_count": 3094, "id": 381288, "video": false, "vote_average": 6.8, "title": "Split", "popularity": 19.539855, "poster_path": "/rXMWOZiCt6eMX22jWuTOSdQ98bY.jpg", "original_language": "en", "original_title": "Split", "genre_ids": [27, 53], "backdrop_path": "/4G6FNNLSIVrwSRZyFs91hQ3lZtD.jpg", "adult": false, "overview": "Though Kevin has evidenced 23 personalities to his trusted psychiatrist, Dr. Fletcher, there remains one still submerged who is set to materialize and dominate all the others. Compelled to abduct three teenage girls led by the willful, observant Casey, Kevin reaches a war for survival among all of those contained within him — as well as everyone around him — as the walls between his compartments shatter apart.", "release_date": "2016-11-15" }, { "vote_count": 2554, "id": 283995, "video": false, "vote_average": 7.6, "title": "Guardians of the Galaxy Vol. 2", "popularity": 19.364494, "poster_path": "/y4MBh0EjBlMuOzv9axM4qJlmhzz.jpg", "original_language": "en", "original_title": "Guardians of the Galaxy Vol. 2", "genre_ids": [28, 12, 35, 878], "backdrop_path": "/aJn9XeesqsrSLKcHfHP4u5985hn.jpg", "adult": false, "overview": "The Guardians must fight to keep their newfound family together as they unravel the mysteries of Peter Quill's true parentage.", "release_date": "2017-04-19" }] };
    }
    //# sourceURL=pen.js
</script>
</body></html>