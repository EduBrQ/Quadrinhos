@extends('template.template2')
@section('content')

  <style class="cp-pen-styles">
        * {
            outline: none;
        }

        body, html {
            margin: 0;
            background: #eee;
            font-family: "Ubuntu", "微軟正黑體", sans-serif;
            letter-spacing: 0.65px;
            font-size: 15px;
            color: #555;
            cursor: default;
        }

        a {
            text-decoration: none;
            color: #555;
            display: block;
            transition-duration: 0.3s;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        h3 {
            color: #3d405b;
            margin: 10px 0;
            text-transform: uppercase;
            font-size: 18px;
        }

        .resume {
            width: 870px;
            background: #fbfbfb;
            margin: 20px auto;
            border: 1px solid #bbb;
            box-shadow: 0 0 20px -3px #bbb;
            position: relative;
            display: flex;
        }
        .resume::before {
            content: "";
            width: 100%;
            height: 6px;
            background: #8d9e78;
            position: absolute;
            bottom: 0;
            left: 0;
        }
        .resume::after {
            content: "";
            display: block;
            clear: both;
        }
        .resume .base, .resume .func {
            box-sizing: border-box;
            float: left;
        }
        .resume .base > div, .resume .func > div {
            padding-bottom: 10px;
        }
        .resume .base > div:last-of-type, .resume .func > div:last-of-type {
            padding-bottom: 0;
        }
        .resume .base {
            width: 225px;
            padding: 30px 15px;
            background: rgba(238, 238, 238, 0.6);
        }
        .resume .base .profile {
            background: #8d9e78;
            padding: 30px 15px 5px 15px;
            margin: -30px -15px 45px -15px;
            position: relative;
            z-index: 2;
        }
        .resume .base .profile::after {
            content: "";
            position: absolute;
            background: #8d9e78;
            width: 100%;
            height: 30px;
            bottom: -15px;
            left: 0;
            transform: skewY(-5deg);
            z-index: -1;
        }
        .resume .base .profile .photo img {
            width: 100%;
            border-radius: 50%;
        }
        .resume .base .profile .info {
            text-align: center;
            color: #fcfcfc;
        }
        .resume .base .profile .info .name {
            margin-top: 10px;
            margin-bottom: 0;
            font-size: 1.5em;
            font-weight: normal;
        }
        .resume .base .contact div {
            line-height: 24px;
        }
        .resume .base .contact div a:hover {
            color: #e07a5f;
        }
        .resume .base .contact div a:hover span::after {
            width: 100%;
        }
        .resume .base .contact div:hover i {
            color: #e07a5f;
        }
        .resume .base .contact div i {
            color: #8d9e78;
            width: 20px;
            height: 20px;
            font-size: 20px;
            text-align: center;
            margin-right: 15px;
            transition-duration: 0.3s;
        }
        .resume .base .contact div span {
            position: relative;
        }
        .resume .base .contact div span::after {
            content: "";
            position: absolute;
            background: #e07a5f;
            height: 1px;
            width: 0;
            bottom: 0;
            left: 0;
            transition-duration: 0.3s;
        }
        .resume .base .follow .box {
            text-align: center;
            vertical-align: middle;
        }
        .resume .base .follow .box a {
            display: inline-block;
            vertical-align: text-bottom;
        }
        .resume .base .follow .box a:hover i {
            background: #e07a5f;
            border-radius: 5px;
            transform: rotate(45deg) scale(0.8);
        }
        .resume .base .follow .box a:hover i::before {
            transform: rotate(-45deg) scale(1.5);
        }
        .resume .base .follow .box i {
            display: inline-block;
            font-size: 30px;
            background: #8d9e78;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            line-height: 60px;
            color: #fcfcfc;
            margin: 0 10px 10px 10px;
            transition-duration: 0.3s;
        }
        .resume .base .follow .box i::before {
            transition-duration: 0.3s;
        }
        .resume .base .follow .box i.fa::before {
            display: block;
        }
        .resume .func {
            width: 645px;
            padding: 30px 25px;
        }
        .resume .func:hover > div {
            transition-duration: 0.3s;
        }
        .resume .func:hover > div:hover h3 {
            letter-spacing: 1.6px;
        }
        .resume .func:hover > div:hover h3 i {
            transform: scale(1.2);
        }
        .resume .func:hover > div:not(:hover) {
            opacity: 0.5;
        }
        .resume .func h3 {
            transition-duration: 0.3s;
            margin-top: 0;
        }
        .resume .func h3 i {
            color: #fcfcfc;
            background: #8d9e78;
            width: 42px;
            height: 42px;
            font-size: 20px;
            line-height: 42px;
            border-radius: 50%;
            text-align: center;
            vertical-align: middle;
            margin-right: 8px;
            transition-duration: 0.3s;
        }
        .resume .func .work, .resume .func .edu {
            float: left;
        }
        .resume .func .work small, .resume .func .edu small {
            display: block;
            opacity: 0.7;
        }
        .resume .func .work ul li, .resume .func .edu ul li {
            position: relative;
            margin-left: 15px;
            padding-left: 25px;
            padding-bottom: 15px;
        }
        .resume .func .work ul li:hover::before, .resume .func .edu ul li:hover::before {
            animation: circle 1.2s infinite;
        }
        .resume .func .work ul li:hover span, .resume .func .edu ul li:hover span {
            color: #e07a5f;
        }
        @keyframes circle {
            from {
                box-shadow: 0 0 0 0px #3d405b;
            }
            to {
                box-shadow: 0 0 0 6px rgba(61, 64, 91, 0);
            }
        }
        .resume .func .work ul li:first-of-type::before, .resume .func .edu ul li:first-of-type::before {
            width: 10px;
            height: 10px;
            left: -2px;
        }
        .resume .func .work ul li:last-of-type, .resume .func .edu ul li:last-of-type {
            padding-bottom: 3px;
        }
        .resume .func .work ul li:last-of-type::after, .resume .func .edu ul li:last-of-type::after {
            border-radius: 1.5px;
        }
        .resume .func .work ul li::before, .resume .func .work ul li::after, .resume .func .edu ul li::before, .resume .func .edu ul li::after {
            content: "";
            display: block;
            position: absolute;
        }
        .resume .func .work ul li::before, .resume .func .edu ul li::before {
            width: 7px;
            height: 7px;
            border: 3px solid #3d405b;
            background: #fcfcfc;
            border-radius: 50%;
            left: 0;
            z-index: 1;
        }
        .resume .func .work ul li::after, .resume .func .edu ul li::after {
            width: 3px;
            height: 100%;
            background: #3d405b;
            left: 5px;
            top: 0;
        }
        .resume .func .work ul li span, .resume .func .edu ul li span {
            transition-duration: 0.3s;
        }
        .resume .func .work {
            width: 42%;
        }
        .resume .func .edu {
            width: 58%;
        }
        .resume .func .skills-prog {
            clear: both;
        }
        .resume .func .skills-prog ul {
            margin-left: 15px;
        }
        .resume .func .skills-prog ul li {
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            transition-duration: 0.3s;
        }
        .resume .func .skills-prog ul li:hover {
            color: #e07a5f;
        }
        .resume .func .skills-prog ul li:hover .skills-bar .bar {
            background: #e07a5f;
            box-shadow: 0 0 0 1px #e07a5f;
        }
        .resume .func .skills-prog ul li span {
            display: block;
            width: 120px;
        }
        .resume .func .skills-prog ul li .skills-bar {
            background: #cdcdcd;
            height: 2px;
            width: calc(100% - 120px);
            position: relative;
            border-radius: 2px;
        }
        .resume .func .skills-prog ul li .skills-bar .bar {
            position: absolute;
            top: -1px;
            height: 4px;
            background: #8d9e78;
            box-shadow: 0 0 0 #8d9e78;
            border-radius: 5px;
        }
        .resume .func .skills-soft ul {
            display: flex;
            justify-content: space-between;
            text-align: center;
        }
        .resume .func .skills-soft ul li {
            position: relative;
        }
        .resume .func .skills-soft ul li:hover svg .cbar {
            stroke: #e07a5f;
            stroke-width: 4px;
        }
        .resume .func .skills-soft ul li:hover span, .resume .func .skills-soft ul li:hover small {
            transform: scale(1.2);
        }
        .resume .func .skills-soft ul li svg {
            width: 95%;
            fill: transparent;
            transform: rotate(-90deg);
        }
        .resume .func .skills-soft ul li svg circle {
            stroke-width: 1px;
            stroke: #cdcdcd;
        }
        .resume .func .skills-soft ul li svg .cbar {
            stroke-width: 3px;
            stroke: #8d9e78;
            stroke-linecap: round;
        }
        .resume .func .skills-soft ul li span, .resume .func .skills-soft ul li small {
            position: absolute;
            display: block;
            width: 100%;
            top: 52%;
            transition-duration: 0.3s;
        }
        .resume .func .skills-soft ul li span {
            top: 40%;
        }
        .resume .func .interests-items {
            box-sizing: border-box;
            padding: 15px;
            width: 100%;
            border: 1px solid #cdcdcd;
            text-align: center;
            display: flex;
            justify-content: space-between;
        }
        .resume .func .interests-items div {
            display: inline-block;
            width: 80px;
            height: 80px;
        }
        .resume .func .interests-items div:hover i {
            transform: scale(1.2);
        }
        .resume .func .interests-items div:hover span {
            color: #e07a5f;
            transition-duration: 0.3s;
        }
        .resume .func .interests-items div i {
            font-size: 45px;
            width: 60px;
            height: 60px;
            line-height: 60px;
            color: #8d9e78;
            transition-duration: 0.3s;
        }
        .resume .func .interests-items div i.guitar {
            display: block;
            margin: 0 auto;
        }
        .resume .func .interests-items div i.guitar svg {
            width: 50px;
            height: 50px;
            margin-top: 5px;
            fill: #8d9e78;
        }
        .resume .func .interests-items div span {
            display: block;
        }
    </style></head><body>

<div class="resume">
    <div class="base">
        <div class="profile">
            <div class="photo"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/764024/profile/profile-512.jpg"></div>
            <div class="info">
                <h4 class="name">Kelly Chen</h4><small class="job">Front-end Web Designer</small>
            </div>
        </div>
        <div class="about">
            <h3>About me</h3>嗨！目前正努力學習中，希望自己的進步及成長能夠被看見，請多指教。<br>喜歡塗鴉、動漫和美好的小事物，歡迎交流 v(´∀｀*v)
        </div>
        <div class="contact">
            <h3>Contact</h3>
            <div class="call"><i class="fa fa-phone"></i><span>(+886)900-000-000</span></div>
            <div class="address"><i class="fa fa-map-marker"></i><span>Taipei, Taiwan</span></div>
            <div class="email"><i class="fa fa-envelope"></i><span>ヽ(*´∀`)@gmail.com</span></div>
            <div class="website"><a href="https://codepen.io/xichen" target="_blank"> <i class="fa fa-home"></i><span>codepen.io/xichen</span></a></div>
        </div>
        <div class="follow">
            <h3>Follow</h3>
            <div class="box"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a><a href="https://www.plurk.com/natsukawa" target="_blank"><i class="pif-plurkapp"></i></a><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a><a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a><a href="javascript:void(0);"><i class="fa fa-tumblr"></i></a><a href="https://codepen.io/xichen/" target="_blank"><i class="fa fa-codepen"></i></a></div>
        </div>
    </div>
    <div class="func">
        <div class="work">
            <h3><i class="fa fa-briefcase"></i>Work Exrerience</h3>
            <ul>
                <li><span>Front-end Web Designer</span><small>Apr 2016 - Now</small></li>
                <li><span>Design Assistant</span><small>Mar 2015 - Dec 2015</small></li>
                <li><span>Design Assistant (Part-time)</span><small>Oct 2014 - Jul 2015</small></li>
            </ul>
        </div>
        <div class="edu">
            <h3><i class="fa fa-graduation-cap"></i>Education</h3>
            <ul>
                <li><span>Department of Information Management</span><small>Set 2010 - Jun 2014</small></li>
                <li><span>Department of Data Processing</span><small>Set 2007 - Jun 2010</small></li>
            </ul>
        </div>
        <div class="skills-prog">
            <h3><i class="fa fa-code"></i>Programming Skills</h3>
            <ul>
                <li data-percent="92"><span>HTML5 &amp; PUG</span>
                    <div class="skills-bar">
                        <div class="bar" style="width: 92%; transition-duration: 0.5s;"></div>
                    </div>
                </li>
                <li data-percent="96"><span>CSS3 &amp; SASS</span>
                    <div class="skills-bar">
                        <div class="bar" style="width: 96%; transition-duration: 0.5s;"></div>
                    </div>
                </li>
                <li data-percent="40"><span>JavaScript</span>
                    <div class="skills-bar">
                        <div class="bar" style="width: 40%; transition-duration: 0.5s;"></div>
                    </div>
                </li>
                <li data-percent="60"><span>jQuery</span>
                    <div class="skills-bar">
                        <div class="bar" style="width: 60%; transition-duration: 0.5s;"></div>
                    </div>
                </li>
                <li data-percent="33"><span>NodeJS</span>
                    <div class="skills-bar">
                        <div class="bar" style="width: 33%; transition-duration: 0.5s;"></div>
                    </div>
                </li>
                <li data-percent="52"><span>VueJS</span>
                    <div class="skills-bar">
                        <div class="bar" style="width: 52%; transition-duration: 0.5s;"></div>
                    </div>
                </li>
                <li data-percent="20"><span>PHP</span>
                    <div class="skills-bar">
                        <div class="bar" style="width: 20%; transition-duration: 0.5s;"></div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="skills-soft">
            <h3><i class="fa fa-th-list"></i>Software Skills</h3>
            <ul>
                <li data-percent="94">
                    <svg viewBox="0 0 100 100">
                        <circle cx="50" cy="50" r="45"></circle>
                        <circle class="cbar" cx="50" cy="50" r="45" style="stroke-dashoffset: 16.9646px; stroke-dasharray: 282.743px; transition-duration: 0.3s;"></circle>
                    </svg><span>Photoshop</span><small>94%</small>
                </li>
                <li data-percent="80">
                    <svg viewBox="0 0 100 100">
                        <circle cx="50" cy="50" r="45"></circle>
                        <circle class="cbar" cx="50" cy="50" r="45" style="stroke-dashoffset: 56.5487px; stroke-dasharray: 282.743px; transition-duration: 0.3s;"></circle>
                    </svg><span>Illustrator</span><small>80%</small>
                </li>
                <li data-percent="89">
                    <svg viewBox="0 0 100 100">
                        <circle cx="50" cy="50" r="45"></circle>
                        <circle class="cbar" cx="50" cy="50" r="45" style="stroke-dashoffset: 31.1018px; stroke-dasharray: 282.743px; transition-duration: 0.3s;"></circle>
                    </svg><span>Sublime Text</span><small>89%</small>
                </li>
                <li data-percent="55">
                    <svg viewBox="0 0 100 100">
                        <circle cx="50" cy="50" r="45"></circle>
                        <circle class="cbar" cx="50" cy="50" r="45" style="stroke-dashoffset: 127.235px; stroke-dasharray: 282.743px; transition-duration: 0.3s;"></circle>
                    </svg><span>Dreamweaver</span><small>55%</small>
                </li>
            </ul>
        </div>
        <div class="interests">
            <h3><i class="fa fa-star"></i>Interests</h3>
            <div class="interests-items">
                <div class="draw"><i class="fa fa-paint-brush"></i><span>Draw</span></div>
                <div class="guitar"><i class="guitar">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.858 53.858">
                            <path d="M6.901,37.275l9.621,9.62l4.185-4.184l-9.622-9.624L6.901,37.275z M11.085,36.64l6.019,6.019l-0.593,0.618l-6.059-6.003L11.085,36.64z"></path>
                            <path d="M36.868,26.667c-0.353-0.705-0.856-1.542-1.346-2.242l-0.366-0.523l-0.088,0.06L50.797,8.235L49.02,6.461L27.277,28.204l0.252,0.754c0.543,1.579,0.152,3.29-1.022,4.464c-1.669,1.668-4.34,1.669-6.009-0.001c-0.784-0.782-1.232-1.9-1.232-3.067c0-1.143,0.438-2.21,1.232-3.005c1.124-1.123,2.881-1.546,4.408-1.018l0.748,0.25L47.396,4.839l-1.836-1.837L29.236,19.276l0.504-0.856l-0.705-0.473c-0.6-0.375-1.231-0.742-1.753-0.872c-0.72-0.227-1.862-0.498-3.213-0.498c-2.318,0-4.399,0.822-6.015,2.377c-1.597,1.533-2.323,3.29-2.875,4.812l-0.069,0.186c-0.09,0.246-0.268,0.732-0.365,0.901c-0.359,0.105-1.264,0.299-1.836,0.366c-2.677,0.509-6.723,1.279-9.691,4.248c-1.125,1.125-3.021,3.529-3.092,7.005c0,3.62,1.996,7.452,5.934,11.39c3.979,3.979,7.791,5.997,11.329,5.997c2.581,0,4.889-1.009,7.066-3.093c2.968-2.968,3.738-7.01,4.247-9.689c0.05-0.199,0.109-0.512,0.171-0.838c0.05-0.26,0.125-0.657,0.176-0.874c0.246-0.135,0.703-0.342,1.166-0.496c1.475-0.536,3.184-1.245,4.818-2.88c3.178-3.372,2.371-7.568,1.879-9.216L36.868,26.667zM24.847,23.653c-2.265-0.469-4.627,0.241-6.185,1.86c-2.652,2.652-2.652,6.967,0,9.621c1.259,1.259,3.001,1.981,4.78,1.981c1.778,0,3.52-0.723,4.779-1.981c1.623-1.621,2.318-3.96,1.86-6.184l3.281-3.282l0.108,0.162c0.365,0.545,0.758,1.166,0.907,1.616c0.554,1.884,0.782,4.579-1.271,6.727c-1.141,1.197-2.512,1.787-3.826,2.248c-1.058,0.377-1.802,0.715-2.28,1.264l-0.095,0.123c-0.237,0.396-0.427,1.125-0.699,2.692c-0.359,2.051-1.027,5.867-3.528,8.429c-1.555,1.556-3.305,2.344-5.2,2.344c-2.856,0.001-6.192-1.793-9.645-5.185c-3.499-3.497-5.244-6.729-5.188-9.615c0-2.383,1.275-4.16,2.345-5.229c2.489-2.488,6.207-3.139,8.424-3.527c1.591-0.265,2.321-0.47,2.786-0.782l0.122-0.106c0.477-0.407,0.74-1.046,1.046-1.786l0.279-0.68c0.464-1.169,0.99-2.494,2.163-3.612c1.147-1.097,2.573-1.652,4.237-1.652c1.184,0,2.166,0.288,2.466,0.376c0.149,0.05,0.391,0.183,0.625,0.312c0.214,0.118,0.432,0.236,0.628,0.324l0.381,0.254L24.847,23.653z"></path>
                            <path d="M23.458,26.252c-1.04,0.075-2.044,0.525-2.757,1.238c-0.762,0.762-1.174,1.772-1.161,2.844c0.013,1.041,0.429,2.003,1.161,2.699c0.77,0.771,1.739,1.178,2.804,1.178c1.035,0,2.056-0.43,2.803-1.177c0.77-0.769,1.177-1.739,1.177-2.802c0-1.034-0.43-2.056-1.177-2.802c-0.768-0.77-1.735-1.178-2.842-1.178C23.462,26.252,23.46,26.252,23.458,26.252z M22.477,29.327c0.265-0.265,0.659-0.43,1.027-0.43c0.409,0,0.735,0.136,1.07,0.468c0.198,0.166,0.326,0.529,0.326,0.928c0,0.408-0.137,0.735-0.43,1.028c-0.521,0.518-1.489,0.546-1.993,0C21.927,30.771,21.927,29.876,22.477,29.327z"></path>
                            <path d="M53.605,8.544l-0.002,0c-0.109-0.623-0.848-3.106-3.078-5.336c-2.085-2.084-4.648-2.96-5.332-3.079L44.546,0l-0.491,0.491c0,0-5.991,5.991-6.301,6.3l-0.457,0.455l1.775,1.776L45.295,2.8c0.867,0.332,2.211,0.988,3.455,2.184c1.186,1.185,1.848,2.562,2.184,3.455l-6.221,6.223l1.773,1.774l7.248-7.246L53.605,8.544z"></path>
                        </svg></i><span>Guitar</span></div>
                <div class="movie"><i class="fa fa-film"></i><span>Movie</span></div>
                <div class="music"><i class="fa fa-headphones"></i><span>Music</span></div>
                <div class="game"><i class="fa fa-gamepad"></i><span>Game</span></div>
            </div>
        </div>
    </div>
</div>
<script src="//static.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>(function() {
        $('.skills-prog li').find('.skills-bar').each(function(i) {
            $(this).find('.bar').delay(i * 150).animate({
                width: $(this).parents().attr('data-percent') + '%'
            }, 1000, 'linear', function() {
                return $(this).css({
                    'transition-duration': '.5s'
                });
            });
        });

        $('.skills-soft li').find('svg').each(function(i) {
            var c, cbar, circle, percent, r;
            circle = $(this).children('.cbar');
            r = circle.attr('r');
            c = Math.PI * (r * 2);
            percent = $(this).parent().data('percent');
            cbar = ((100 - percent) / 100) * c;
            circle.css({
                'stroke-dashoffset': c,
                'stroke-dasharray': c
            });
            circle.delay(i * 150).animate({
                strokeDashoffset: cbar
            }, 1000, 'linear', function() {
                return circle.css({
                    'transition-duration': '.3s'
                });
            });
            $(this).siblings('small').prop('Counter', 0).delay(i * 150).animate({
                Counter: percent
            }, {
                duration: 1000,
                step: function(now) {
                    return $(this).text(Math.ceil(now) + '%');
                }
            });
        });

    }).call(this);

    //# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiIiwic291cmNlUm9vdCI6IiIsInNvdXJjZXMiOlsiPGFub255bW91cz4iXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7RUFBQSxDQUFBLENBQUUsaUJBQUYsQ0FBb0IsQ0FBQyxJQUFyQixDQUEwQixhQUExQixDQUF3QyxDQUFDLElBQXpDLENBQThDLFFBQUEsQ0FBQyxDQUFELENBQUE7SUFDNUMsQ0FBQSxDQUFFLElBQUYsQ0FBTyxDQUFDLElBQVIsQ0FBYSxNQUFiLENBQW9CLENBQUMsS0FBckIsQ0FBMkIsQ0FBQSxHQUFFLEdBQTdCLENBQWlDLENBQUMsT0FBbEMsQ0FBMEM7TUFDeEMsS0FBQSxFQUFPLENBQUEsQ0FBRSxJQUFGLENBQU8sQ0FBQyxPQUFSLENBQUEsQ0FBaUIsQ0FBQyxJQUFsQixDQUF1QixjQUF2QixDQUFBLEdBQXlDO0lBRFIsQ0FBMUMsRUFFRyxJQUZILEVBRVMsUUFGVCxFQUVtQixRQUFBLENBQUEsQ0FBQTthQUNqQixDQUFBLENBQUUsSUFBRixDQUFPLENBQUMsR0FBUixDQUFZO1FBQUEscUJBQUEsRUFBdUI7TUFBdkIsQ0FBWjtJQURpQixDQUZuQjtFQUQ0QyxDQUE5Qzs7RUFNQSxDQUFBLENBQUUsaUJBQUYsQ0FBb0IsQ0FBQyxJQUFyQixDQUEwQixLQUExQixDQUFnQyxDQUFDLElBQWpDLENBQXNDLFFBQUEsQ0FBQyxDQUFELENBQUE7QUFDcEMsUUFBQSxDQUFBLEVBQUEsSUFBQSxFQUFBLE1BQUEsRUFBQSxPQUFBLEVBQUE7SUFBQSxNQUFBLEdBQVMsQ0FBQSxDQUFFLElBQUYsQ0FBTyxDQUFDLFFBQVIsQ0FBaUIsT0FBakI7SUFDVCxDQUFBLEdBQUksTUFBTSxDQUFDLElBQVAsQ0FBWSxHQUFaO0lBQ0osQ0FBQSxHQUFJLElBQUksQ0FBQyxFQUFMLEdBQVUsQ0FBQyxDQUFBLEdBQUksQ0FBTDtJQUNkLE9BQUEsR0FBVSxDQUFBLENBQUUsSUFBRixDQUFPLENBQUMsTUFBUixDQUFBLENBQWdCLENBQUMsSUFBakIsQ0FBc0IsU0FBdEI7SUFDVixJQUFBLEdBQU8sQ0FBQyxDQUFDLEdBQUEsR0FBSSxPQUFMLENBQUEsR0FBYyxHQUFmLENBQUEsR0FBc0I7SUFDN0IsTUFBTSxDQUFDLEdBQVAsQ0FBVztNQUFBLG1CQUFBLEVBQXFCLENBQXJCO01BQXdCLGtCQUFBLEVBQW9CO0lBQTVDLENBQVg7SUFDQSxNQUFNLENBQUMsS0FBUCxDQUFhLENBQUEsR0FBRSxHQUFmLENBQW1CLENBQUMsT0FBcEIsQ0FBNEI7TUFDMUIsZ0JBQUEsRUFBa0I7SUFEUSxDQUE1QixFQUVHLElBRkgsRUFFUyxRQUZULEVBRW1CLFFBQUEsQ0FBQSxDQUFBO2FBQ2pCLE1BQU0sQ0FBQyxHQUFQLENBQVc7UUFBQSxxQkFBQSxFQUF1QjtNQUF2QixDQUFYO0lBRGlCLENBRm5CO0lBSUEsQ0FBQSxDQUFFLElBQUYsQ0FBTyxDQUFDLFFBQVIsQ0FBaUIsT0FBakIsQ0FBeUIsQ0FBQyxJQUExQixDQUErQixTQUEvQixFQUEwQyxDQUExQyxDQUE0QyxDQUFDLEtBQTdDLENBQW1ELENBQUEsR0FBRSxHQUFyRCxDQUF5RCxDQUFDLE9BQTFELENBQWtFO01BQ2hFLE9BQUEsRUFBUztJQUR1RCxDQUFsRSxFQUVHO01BQUEsUUFBQSxFQUFVLElBQVY7TUFBZ0IsSUFBQSxFQUFNLFFBQUEsQ0FBQyxHQUFELENBQUE7ZUFDdkIsQ0FBQSxDQUFFLElBQUYsQ0FBTyxDQUFDLElBQVIsQ0FBYSxJQUFJLENBQUMsSUFBTCxDQUFVLEdBQVYsQ0FBQSxHQUFpQixHQUE5QjtNQUR1QjtJQUF0QixDQUZIO0VBWG9DLENBQXRDO0FBTkEiLCJzb3VyY2VzQ29udGVudCI6WyIkKCcuc2tpbGxzLXByb2cgbGknKS5maW5kKCcuc2tpbGxzLWJhcicpLmVhY2ggKGkpIC0+XG4gICQodGhpcykuZmluZCgnLmJhcicpLmRlbGF5KGkqMTUwKS5hbmltYXRlIHtcbiAgICB3aWR0aDogJCh0aGlzKS5wYXJlbnRzKCkuYXR0cignZGF0YS1wZXJjZW50JykgKyAnJSdcbiAgfSwgMTAwMCwgJ2xpbmVhcicsIC0+XG4gICAgJCh0aGlzKS5jc3MgJ3RyYW5zaXRpb24tZHVyYXRpb24nOiAnLjVzJ1xuICByZXR1cm5cbiQoJy5za2lsbHMtc29mdCBsaScpLmZpbmQoJ3N2ZycpLmVhY2ggKGkpIC0+XG4gIGNpcmNsZSA9ICQodGhpcykuY2hpbGRyZW4oJy5jYmFyJylcbiAgciA9IGNpcmNsZS5hdHRyKCdyJylcbiAgYyA9IE1hdGguUEkgKiAociAqIDIpXG4gIHBlcmNlbnQgPSAkKHRoaXMpLnBhcmVudCgpLmRhdGEgJ3BlcmNlbnQnXG4gIGNiYXIgPSAoKDEwMC1wZXJjZW50KS8xMDApICogY1xuICBjaXJjbGUuY3NzICdzdHJva2UtZGFzaG9mZnNldCc6IGMsICdzdHJva2UtZGFzaGFycmF5JzogY1xuICBjaXJjbGUuZGVsYXkoaSoxNTApLmFuaW1hdGUge1xuICAgIHN0cm9rZURhc2hvZmZzZXQ6IGNiYXJcbiAgfSwgMTAwMCwgJ2xpbmVhcicsIC0+XG4gICAgY2lyY2xlLmNzcyAndHJhbnNpdGlvbi1kdXJhdGlvbic6ICcuM3MnXG4gICQodGhpcykuc2libGluZ3MoJ3NtYWxsJykucHJvcCgnQ291bnRlcicsIDApLmRlbGF5KGkqMTUwKS5hbmltYXRlIHtcbiAgICBDb3VudGVyOiBwZXJjZW50XG4gIH0sIGR1cmF0aW9uOiAxMDAwLCBzdGVwOiAobm93KSAtPlxuICAgICQodGhpcykudGV4dCBNYXRoLmNlaWwobm93KSArICclJ1xuICByZXR1cm4iXX0=
    //# sourceURL=coffeescript
    //# sourceURL=pen.js
</script>
</body>