 <div class="sidebar-wrapper" style="background-color: #122b40; color: #ab080b">
    <div class="logo">
        <a href="#" class="simple-text" style="font-size: large" >
            <img src="/uploads/imgs/logo-home-300x247.png" style="width:120px; height:90px; position:center; top:10px; left:10px">

        </a>
        <hr style="height:2px; border:none; color:#000; background-color:white; margin-top: 0px; margin-bottom: 0px;"/>
        

        <span></span>
    </div>

    <ul class="nav">
        <li class="">
            <a href="/home">
                <i class="pe-7s-home"></i>
                <p style="font-size: medium">Início</p>
            </a>
        </li>
        <br>

        {{--<li class="">--}}
            {{--<a href="/produtos">--}}
                {{--<i class="pe-7s-graph"></i>--}}
                {{--<p>Produtos</p>--}}
            {{--</a>--}}
        {{--</li>--}}
        <li class="">
            <a href="/colecoes">
                <i class="pe-7s-box1"></i>
                <p style="font-size: medium">Coleções</p>
            </a>
        </li>

        <br>

        <li class="">
            <a href="/emprestimos">
                <i class="pe-7s-refresh-2"></i>
                <p style="font-size: medium">Emprestimos</p>
            </a>
        </li>

        <br>
        <li>
            <a href="/amigos">
                <i class="pe-7s-id"></i>

                <p style="font-size: medium">Amigos</p>
            </a>
        </li>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <li>



    </ul>

</div>




     <style class="cp-pen-styles">* {
             padding: 0;
             margin: 0;
             box-sizing: border-box;
         }

         body {
             background: #ffffff;
             transition: background .5s ease 0s;
         }

         .toggle-container {
             position: absolute;
             top: 0;
             right: 0;
             bottom: 0;
             left: 0;
             margin: auto;
             width: 150px;
             height: 70px;
             background: #133d55;
             border-radius: 35px;
             border: 5.0002px solid #1C1C1C;
             overflow: hidden;
             cursor: pointer;
             transition: border-color .5s ease 0s, background .5s ease 0s;
         }
         .toggle-container .toggle-handle {
             position: absolute;
             height: 60.998px;
             width: 60.998px;
             left: 2.99998px;
             top: 0;
             bottom: 0;
             margin: auto;
             border-radius: 50%;
             background: #FFFFFF;
             border: 6.0002px solid #E4E9C8;
             box-shadow: 0px 0px 20px rgba(228, 233, 200, 0.5);
             z-index: 999;
             transition: left .5s ease 0s, background .5s ease 0s, border-color .5s ease 0s, transform .5s ease 0s;
         }
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
         .header-fixed .header-limiter h1 span {
             color: #5383d3;
         }
         .toggle-container .toggle-handle .crater {
             position: absolute;
             border: 5.0002px solid #E4E9C8;
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
             left: 80.48px !important;
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
     </style></head>
 </html>
