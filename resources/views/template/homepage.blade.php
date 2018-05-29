<html lang="en" class=""><head><script src="//static.codepen.io/assets/editor/live/console_runner-ce3034e6bde3912cc25f83cccb7caa2b0f976196f2f2d52303a462c826d54a73.js"></script><script src="//static.codepen.io/assets/editor/live/css_live_reload_init-890dc39bb89183d4642d58b1ae5376a0193342f9aed88ea04330dc14c8d52f55.js"></script><meta charset="UTF-8"><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//static.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico"><link rel="mask-icon" type="" href="//static.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111"><link rel="canonical" href="https://codepen.io/ibanez182/pen/LZPgrY">

    <link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"><link rel="stylesheet prefetch" href="https://fonts.googleapis.com/css?family=Raleway:300">
    <style class="cp-pen-styles">.slideshow {
            position: absolute;
            width: 100vw;
            height: 100vh;
            overflow: hidden;
        }

        .slideshow-image {
            position: absolute;
            width: 100%;
            height: 100%;
            background: no-repeat 50% 50%;
            background-size: cover;
            -webkit-animation-name: kenburns;
            animation-name: kenburns;
            -webkit-animation-timing-function: linear;
            animation-timing-function: linear;
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-duration: 16s;
            animation-duration: 16s;
            opacity: 1;
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
        }
        .slideshow-image:nth-child(1) {
            -webkit-animation-name: kenburns-1;
            animation-name: kenburns-1;
            z-index: 3;
        }
        .slideshow-image:nth-child(2) {
            -webkit-animation-name: kenburns-2;
            animation-name: kenburns-2;
            z-index: 2;
        }
        .slideshow-image:nth-child(3) {
            -webkit-animation-name: kenburns-3;
            animation-name: kenburns-3;
            z-index: 1;
        }
        .slideshow-image:nth-child(4) {
            -webkit-animation-name: kenburns-4;
            animation-name: kenburns-4;
            z-index: 0;
        }

        @-webkit-keyframes kenburns-1 {
            0% {
                opacity: 1;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }
            1.5625% {
                opacity: 1;
            }
            23.4375% {
                opacity: 1;
            }
            26.5625% {
                opacity: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
            100% {
                opacity: 0;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }
            98.4375% {
                opacity: 0;
                -webkit-transform: scale(1.2117647059);
                transform: scale(1.2117647059);
            }
            100% {
                opacity: 1;
            }
        }

        @keyframes kenburns-1 {
            0% {
                opacity: 1;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }
            1.5625% {
                opacity: 1;
            }
            23.4375% {
                opacity: 1;
            }
            26.5625% {
                opacity: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
            100% {
                opacity: 0;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }
            98.4375% {
                opacity: 0;
                -webkit-transform: scale(1.2117647059);
                transform: scale(1.2117647059);
            }
            100% {
                opacity: 1;
            }
        }
        @-webkit-keyframes kenburns-2 {
            23.4375% {
                opacity: 1;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }
            26.5625% {
                opacity: 1;
            }
            48.4375% {
                opacity: 1;
            }
            51.5625% {
                opacity: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
            100% {
                opacity: 0;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }
        }
        @keyframes kenburns-2 {
            23.4375% {
                opacity: 1;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }
            26.5625% {
                opacity: 1;
            }
            48.4375% {
                opacity: 1;
            }
            51.5625% {
                opacity: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
            100% {
                opacity: 0;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }
        }
        @-webkit-keyframes kenburns-3 {
            48.4375% {
                opacity: 1;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }
            51.5625% {
                opacity: 1;
            }
            73.4375% {
                opacity: 1;
            }
            76.5625% {
                opacity: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
            100% {
                opacity: 0;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }
        }
        @keyframes kenburns-3 {
            48.4375% {
                opacity: 1;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }
            51.5625% {
                opacity: 1;
            }
            73.4375% {
                opacity: 1;
            }
            76.5625% {
                opacity: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
            100% {
                opacity: 0;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }
        }
        @-webkit-keyframes kenburns-4 {
            73.4375% {
                opacity: 1;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }
            76.5625% {
                opacity: 1;
            }
            98.4375% {
                opacity: 1;
            }
            100% {
                opacity: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }
        @keyframes kenburns-4 {
            73.4375% {
                opacity: 1;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }
            76.5625% {
                opacity: 1;
            }
            98.4375% {
                opacity: 1;
            }
            100% {
                opacity: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }
        h1 {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate3d(-50%, -50%, 0);
            transform: translate3d(-50%, -50%, 0);
            z-index: 99;
            text-align: center;
            font-family: Raleway, sans-serif;
            font-weight: 300;
            text-transform: uppercase;
            background-color: rgba(255, 255, 255, 0.75);
            box-shadow: 0 1em 2em -1em rgba(0, 0, 0, 0.5);
            padding: 1em 2em;
            line-height: 1.5;
        }
        h1 small {
            display: block;
            text-transform: lowercase;
            font-size: .7em;
        }
        h1 small:first-child {
            border-bottom: 1px solid rgba(0, 0, 0, 0.25);
            padding-bottom: .5em;
        }
        h1 small:last-child {
            border-top: 1px solid rgba(0, 0, 0, 0.25);
            padding-top: .5em;
        }
    </style></head><body>
<h1><small>Fullscreen</small> Ken Burns effect <small>without javascript</small></h1>

<!-- You can add more ".slideshow-image" elements, but remember to update the "$items" variable on SCSS -->
<div class="slideshow">
    <div class="slideshow-image" style="background-image: url('https://source.unsplash.com/category/nature/1600x1400')"></div>
    <div class="slideshow-image" style="background-image: url('https://source.unsplash.com/category/buildings/1600x1400')"></div>
    <div class="slideshow-image" style="background-image: url('https://source.unsplash.com/category/food/1600x1400')"></div>
    <div class="slideshow-image" style="background-image: url('https://source.unsplash.com/category/technology/1600x1400')"></div>
</div>

</body></html>