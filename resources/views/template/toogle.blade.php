<html lang="en" class=""><head><script src="//static.codepen.io/assets/editor/live/console_runner-ce3034e6bde3912cc25f83cccb7caa2b0f976196f2f2d52303a462c826d54a73.js"></script><script src="//static.codepen.io/assets/editor/live/css_live_reload_init-890dc39bb89183d4642d58b1ae5376a0193342f9aed88ea04330dc14c8d52f55.js"></script><meta charset="UTF-8"><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//static.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico"><link rel="mask-icon" type="" href="//static.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111"><link rel="canonical" href="https://codepen.io/camstephensdomo/pen/xVgPoo">


    <style class="cp-pen-styles">* {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background: #222;
            transition: background .5s ease 0s;
        }

        .toggle-container {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            margin: auto;
            width: 280px;
            height: 140px;
            background: #3C4145;
            border-radius: 70px;
            border: 10.0002px solid #1C1C1C;
            overflow: hidden;
            cursor: pointer;
            transition: border-color .5s ease 0s, background .5s ease 0s;
        }
        .toggle-container .toggle-handle {
            position: absolute;
            height: 109.998px;
            width: 109.998px;
            left: 5.99998px;
            top: 0;
            bottom: 0;
            margin: auto;
            border-radius: 50%;
            background: #FFFFFF;
            border: 10.0002px solid #E4E9C8;
            box-shadow: 0px 0px 20px rgba(228, 233, 200, 0.5);
            z-index: 999;
            transition: left .5s ease 0s, background .5s ease 0s, border-color .5s ease 0s, transform .5s ease 0s;
        }
        .toggle-container .toggle-handle .crater {
            position: absolute;
            border: 10.0002px solid #E4E9C8;
            border-radius: 50%;
        }
        .toggle-container .toggle-handle .crater-one {
            top: 10%;
            left: 3%;
            height: 40%;
            width: 40%;
        }
        .toggle-container .toggle-handle .crater-two {
            right: 6%;
            top: 6%;
        }
        .toggle-container .toggle-handle .crater-three {
            right: 24%;
            bottom: 10%;
            height: 30%;
            width: 30%;
        }
        .toggle-container .mini-cloud {
            height: 40%;
            width: auto;
            position: absolute;
            left: 20%;
            top: 38%;
            opacity: 0;
            z-index: 999;
            transition: opacity .25s ease 0s, left .5s ease 0s;
        }
        .toggle-container .star {
            position: absolute;
            background: #FFFFFF;
            opacity: 1;
            border-radius: 50%;
            transform: scale(1);
            transition: transform .5s ease;
        }
        .toggle-container .star-small {
            height: 4%;
            width: 2%;
        }
        .toggle-container .star-medium {
            height: 6%;
            width: 3%;
        }
        .toggle-container .star-large {
            height: 8%;
            width: 4%;
        }
        .toggle-container .star-one {
            top: 12%;
            left: 45%;
            transition-delay: .4s;
        }
        .toggle-container .star-two {
            top: 72%;
            left: 50%;
            transition-delay: .35s;
        }
        .toggle-container .star-three {
            top: 30%;
            left: 62%;
            transition-delay: .3s;
        }
        .toggle-container .star-four {
            top: 56%;
            left: 68%;
            transition-delay: .25s;
        }
        .toggle-container .star-five {
            top: 8%;
            left: 76%;
            transition-delay: .2s;
        }
        .toggle-container .star-six {
            top: 40%;
            left: 86%;
            transition-delay: .15s;
        }
        .toggle-container .star-seven {
            top: 70%;
            left: 82%;
            transition-delay: .1s;
        }

        .toggle-handle-day {
            left: 144.48px !important;
            background: #FFE06E !important;
            border-color: #E2C448 !important;
            transform: rotate(90deg);
        }

        .toggle-container-day {
            background: #9FE4FC;
            border-color: #86C4D8;
        }

        .off {
            background: #FAFAFA !important;
            transition: background .5s ease 0s;
        }

        .star-day {
            opacity: 0 !important;
            transform: scale(0) !important;
        }

        .crater-day {
            width: 0% !important;
            height: 0% !important;
            border: 0px solid transparent !important;
            transition: height .5s ease 0s, width .5s ease 0s, border .5s ease 0s;
        }

        .cloud-day {
            opacity: 1 !important;
            left: 40% !important;
        }
    </style></head><body class="">
<div class="toggle-container">
    <div class="toggle-handle">
        <div class="crater crater-one"></div>
        <div class="crater crater-two"></div>
        <div class="crater crater-three"></div>
    </div>
    <img class="mini-cloud" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/480623/toggle_cloud.png">
    <div class="star star-medium star-one"></div>
    <div class="star star-large star-two"></div>
    <div class="star star-small star-three"></div>
    <div class="star star-small star-four"></div>
    <div class="star star-medium star-five"></div>
    <div class="star star-large star-six"></div>
    <div class="star star-medium star-seven"></div>
</div>
<script src="//static.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js"></script><script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>var darkSide = new Audio();
    darkSide.src = "https://s3-us-west-2.amazonaws.com/s.cdpn.io/480623/vadar_breathing.mp3";

    var lightSide = new Audio();
    lightSide.src = "https://s3-us-west-2.amazonaws.com/s.cdpn.io/480623/yoda_use_the_force.mp3";

    var clickCount = 0;

    $('.toggle-container').on('click', function(){
        $('.toggle-handle').toggleClass('toggle-handle-day');
        $('body').toggleClass('off');
        $('.toggle-container').toggleClass('toggle-container-day');
        $('.star').toggleClass('star-day');
        $('.crater').toggleClass('crater-day');
        $('.mini-cloud').toggleClass('cloud-day');
        if (clickCount === 0){
            clickCount++;
            darkSide.pause();
            lightSide.play();
            return darkSide.currentTime = 0;
        } else if (clickCount === 1){
            clickCount--;
            lightSide.pause();
            darkSide.play();
            return lightSide.currentTime = 0;
        }
    });
    //# sourceURL=pen.js
</script>
</body></html>