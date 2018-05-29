<script src="//static.codepen.io/assets/editor/live/console_runner-ce3034e6bde3912cc25f83cccb7caa2b0f976196f2f2d52303a462c826d54a73.js"></script><script src="//static.codepen.io/assets/editor/live/css_live_reload_init-890dc39bb89183d4642d58b1ae5376a0193342f9aed88ea04330dc14c8d52f55.js"></script><meta charset="UTF-8"><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//static.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico"><link rel="mask-icon" type="" href="//static.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111"><link rel="canonical" href="https://codepen.io/n7best/pen/RMxKQr">

    <link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"><link rel="stylesheet prefetch" href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300">
    <style class="cp-pen-styles">html {
            height: 100%;
        }

        body {
            background: #6FA5F6;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .password {
            width: 350px;
            height: 75px;
            background: #121727;
            border-radius: 10px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 0 12px 0px rgba(1, 1, 1, 0.25);
        }
        .password--background {
            background: #FEFEFE;
            position: absolute;
            width: 150%;
            height: 100%;
            right: -50%;
            top: 0;
            transition: .20s all ease-in-out;
            border-radius: 5px;
        }
        .password--visibleToggle {
            position: absolute;
            width: 50px;
            height: 50px;
            right: 10px;
            top: 10px;
            z-index: 1;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            outline: none;
        }
        .password--visibleToggle-eye {
            width: 25px;
            height: 25px;
            position: absolute;
            right: 25px;
            top: 25px;
            -webkit-perspective: 1000px;
            perspective: 1000px;
            overflow: hidden;
        }
        .password--visibleToggle-eye.close {
            transition: .4s all ease-in-out;
        }
        .password--visibleToggle-eye.open {
            transition: .2s .2s all ease-out;
        }
        .password--visibleToggle-eye img {
            width: 100%;
        }
        .password--lock {
            width: 20px;
            height: 20px;
            fill: #111;
            transition: all .5s;
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            left: 25px;
        }
        .password--input {
            background: none;
            border: none;
            color: #575DBF;
            position: absolute;
            width: 200px;
            left: 60px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            font-size: 18px;
            letter-spacing: 2px;
            transition: all .5s;
            outline: none;
            font-family: 'Open Sans Condensed', sans-serif;
            -webkit-text-security: none;
        }
        .password--input:focus {
            border-bottom: 1px solid;
        }
        .password--visibleToggle:checked ~ .password--background {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            right: 12.5px;
            top: 12.5px;
        }
        .password--visibleToggle:checked ~ .password--input {
            -webkit-text-security: circle;
        }
        .password--visibleToggle:checked ~ .password--lock {
            fill: #fff;
        }
        .password--visibleToggle:checked ~ .password--visibleToggle-eye.close {
            -webkit-transform: rotateX(180deg);
            transform: rotateX(180deg);
        }
        .password--visibleToggle:checked ~ .password--visibleToggle-eye.open {
            opacity: 0;
        }
    </style>
