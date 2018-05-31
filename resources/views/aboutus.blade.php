
<html lang="en" class="" style="--pct:0;"><head><script src="//static.codepen.io/assets/editor/live/console_runner-ce3034e6bde3912cc25f83cccb7caa2b0f976196f2f2d52303a462c826d54a73.js"></script><script src="//static.codepen.io/assets/editor/live/css_live_reload_init-890dc39bb89183d4642d58b1ae5376a0193342f9aed88ea04330dc14c8d52f55.js"></script><meta charset="UTF-8"><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//static.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico"><link rel="mask-icon" type="" href="//static.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111"><link rel="canonical" href="https://codepen.io/jakob-e/pen/ELqeRM">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style class="cp-pen-styles">@import url("https://fonts.googleapis.com/css?family=Open+Sans|Oswald:200");
        .wrapper
        {
            padding-bottom: 90px;
        }

        .divider
        {
            position: relative;
            margin-top: 90px;
            height: 1px;
        }

        .div-transparent:before
        {
            content: "";
            position: absolute;
            top: 0;
            left: 5%;
            right: 5%;
            width: 90%;
            height: 1px;
            background-image: linear-gradient(to right, transparent, rgb(48,49,51), transparent);
        }

        .div-arrow-down:after
        {
            content: "";
            position: absolute;
            z-index: 1;
            top: -7px;
            left: calc(50% - 7px);
            width: 14px;
            height: 14px;
            transform: rotate(45deg);
            background-color: white;
            border-bottom: 1px solid rgb(48,49,51);
            border-right: 1px solid rgb(48,49,51);
        }

        .div-tab-down:after
        {
            content: "";
            position: absolute;
            z-index: 1;
            top: 0;
            left: calc(50% - 10px);
            width: 20px;
            height: 14px;
            background-color: white;
            border-bottom: 1px solid rgb(48,49,51);
            border-left: 1px solid rgb(48,49,51);
            border-right: 1px solid rgb(48,49,51);
            border-radius: 0 0 8px 8px;
        }

        .div-stopper:after
        {
            content: "";
            position: absolute;
            z-index: 1;
            top: -6px;
            left: calc(50% - 7px);
            width: 14px;
            height: 12px;
            background-color: white;
            border-left: 1px solid rgb(48,49,51);
            border-right: 1px solid rgb(48,49,51);
        }

        .div-dot:after
        {
            content: "";
            position: absolute;
            z-index: 1;
            top: -9px;
            left: calc(50% - 9px);
            width: 18px;
            height: 18px;
            background-color: goldenrod;
            border: 1px solid rgb(48,49,51);
            border-radius: 50%;
            box-shadow: inset 0 0 0 2px white,
            0 0 0 4px white;
        }
        .parallax {
            position: relative;
            display: block;
            -webkit-transform-origin: bottom center;
            transform-origin: bottom center;
            -webkit-transform: translate3d(0, calc(var(--pct) * 35%), 0) scale(calc(var(--pct)/5 + 1));
            transform: translate3d(0, calc(var(--pct) * 35%), 0) scale(calc(var(--pct)/5 + 1));
        }
        .parallax mask {
            fill: #fff;
        }
        .parallax image {
            position: absolute;
            -webkit-transform-origin: bottom center;
            transform-origin: bottom center;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
        .parallax [mask="url(#p1)"] {
            -webkit-transform: translate3d(0, calc(var(--pct) * -20.0%), 0);
            transform: translate3d(0, calc(var(--pct) * -20.0%), 0);
        }
        .parallax [mask="url(#p2)"] {
            -webkit-transform: translate3d(0, calc(var(--pct) * -17.5%), 0);
            transform: translate3d(0, calc(var(--pct) * -17.5%), 0);
        }
        .parallax [mask="url(#p3)"] {
            -webkit-transform: translate3d(0, calc(var(--pct) * -15.0%), 0);
            transform: translate3d(0, calc(var(--pct) * -15.0%), 0);
        }
        .parallax [mask="url(#p4)"] {
            -webkit-transform: translate3d(0, calc(var(--pct) * -12.5%), 0);
            transform: translate3d(0, calc(var(--pct) * -12.5%), 0);
        }
        .parallax [mask="url(#p5)"] {
            -webkit-transform: translate3d(0, calc(var(--pct) * -10.0%), 0);
            transform: translate3d(0, calc(var(--pct) * -10.0%), 0);
        }
        .parallax [mask="url(#p6)"] {
            -webkit-transform: translate3d(0, calc(var(--pct) *  -7.5%), 0);
            transform: translate3d(0, calc(var(--pct) *  -7.5%), 0);
        }
        .parallax [mask="url(#p7)"] {
            -webkit-transform: translate3d(0, calc(var(--pct) *  -5.0%), 0);
            transform: translate3d(0, calc(var(--pct) *  -5.0%), 0);
        }
        .parallax [mask="url(#p8)"] {
            -webkit-transform: translate3d(0, calc(var(--pct) *  -2.5%), 0);
            transform: translate3d(0, calc(var(--pct) *  -2.5%), 0);
        }

        html {
            box-sizing: border-box;
        }

        *, *:before, *:after {
            box-sizing: inherit;
        }

        body {
            margin: 0;
            background-color: #2b110e;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        header {
            overflow: hidden;
            box-shadow: inset 0 -4em 4em -4em #2b110e;
        }

        main {
            position: relative;
            z-index: 1;
            min-height: 100vh;
            border-top: 1px solid #3e1914;
            padding: 2em 1em 4em;
            max-width: 580px;
            margin: 0 auto;
        }

        .logo {
            fill: rgba(255, 255, 255, 0.3);
            width: .72em;
            vertical-align: top;
            margin: 0.15em 0.15em 0.15em 0;
        }

        .separator {
            fill: rgba(255, 255, 255, 0.1);
            height: 2em;
            vertical-align: top;
            margin: 1em 0 0;
            width: 100%;
        }

        h1 {
            margin: 0;
            font-family: Oswald;
            font-size: 2em;
            line-height: 1;
            font-weight: 200;
            color: rgba(255, 255, 255, 0.7);
        }

        h2 {
            margin: 2em 0 0;
            font-family: Oswald;
            font-size: 1.6em;
            line-height: 1;
            font-weight: 200;
            color: rgba(255, 255, 255, 0.7);
        }

        p, a {
            font-family: Open Sans;
            color: rgba(255, 255, 255, 0.7);
        }

        .no-iframe {
            position: absolute;
            top: 2em;
            right: 1em;
            display: none;
            transition: 200ms;
            z-index: 1;
            font-size: .7em;
            padding: 0.5em;
            text-decoration: none;
            background-color: #2b110e;
            opacity: 0.5;
        }
        .no-iframe:hover {
            opacity: 0.7;
        }
    </style></head><body>
<div class="page">

    <header>
        <svg class="parallax" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 240">
          


            <!-- background -->
            <image width="480" height="240" xlink:href="http://www.gameondaily.com/wordpress/wp-content/uploads/2015/02/fableleg.jpg"></image>

            <!-- parallax items -->
            <image width="480" height="240" mask="url(#p8)" xlink:href="http://www.gameondaily.com/wordpress/wp-content/uploads/2015/02/fableleg.jpg"></image>
            <image width="480" height="240" mask="url(#p7)" xlink:href="http://www.gameondaily.com/wordpress/wp-content/uploads/2015/02/fableleg.jpg"></image>
            <image width="480" height="240" mask="url(#p6)" xlink:href="http://www.gameondaily.com/wordpress/wp-content/uploads/2015/02/fableleg.jpg"></image>
            <image width="480" height="240" mask="url(#p5)" xlink:href="http://www.gameondaily.com/wordpress/wp-content/uploads/2015/02/fableleg.jpg"></image>
            <image width="480" height="240" mask="url(#p4)" xlink:href="http://www.gameondaily.com/wordpress/wp-content/uploads/2015/02/fableleg.jpg"></image>
            <image width="480" height="240" mask="url(#p3)" xlink:href="http://www.gameondaily.com/wordpress/wp-content/uploads/2015/02/fableleg.jpg"></image>
            <image width="480" height="240" mask="url(#p2)" xlink:href="http://www.gameondaily.com/wordpress/wp-content/uploads/2015/02/fableleg.jpg"></image>
            <image width="480" height="240" mask="url(#p1)" xlink:href="http://www.gameondaily.com/wordpress/wp-content/uploads/2015/02/fableleg.jpg"></image>
        </svg>
    </header>

    <div class="divider div-transparent div-arrow-down"></div>
    <main>

        <h1>

            <p></p>Meus Favoritos

            <div class="wrapper">
                <div class="divider div-transparent"></div>
            </div>
            <svg class="separator" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 300">
                <image width="480" height="240" mask="url(#p8)" xlink:href="https://vignette.wikia.nocookie.net/logopedia/images/f/f2/Dragon_Ball_Z_Logo.svg/revision/latest/scale-to-width-down/320?cb=20130410110535"></image>
            </svg>


        </h1>
        <h2>" É mais de 8000! "</h2>
        <p>Cinco anos depois do final da série anterior, com Son Goku adulto e seu filho Son Gohan, fruto de seu casamento com Chi-Chi.[11] [12] Um homem desconhecido chamado Raditz, chega na Terra em uma nave espacial e encontra Goku e conta que é seu irmão mais velho e que o nome verdadeiro de Goku é "Kakaroto" (カカロット?) e que e os dois membros de uma raça extraterrestre quase extinta chamada Saiyajin (サイヤ人?).[13] Os saiyajins enviaram a Goku para a Terra como uma criança para conquistar o planeta para eles, mas ao cair de um penhasco e bater a cabeça em uma rocha ele esquece a sua missão. Goku se nega a ajudar Raditz, que sequestra Gohan.[8] Goku decide formar uma aliança com Piccolo para derrotar Raditz e salvar seu filho, sacrificando sua vida no processo.[9] Morto, Goku treina com o Senhor Kaio até que ser ressuscitado pelas esferas do dragão um ano depois para salvar a Terra, surgem dois companheiros de Raditz: Nappa e Vegeta, o príncipe dos saiyajins.[8][14]

            Durante a batalha, Piccolo é morto, junto com amigos de Goku, Yamcha , Tenshinhan e Chaos, as esferas do dragão deixam de existir devido à morte de Piccolo (uma vez com a morte de Piccolo, Kami Sama também morre).[9] Goku chega ao campo de batalha atrasado, mas vinga seus amigos caídos ao derrotar Nappa com seu novo nível de poder.[13] Vegeta trava uma batalha com Goku, e depois de vários confrontos, Goku consegue vencê-lo com a ajuda de Gohan e seu melhor amigo Kurilin. A pedido de Goku, Kurilin poupa a vida de Vegeta e deixa-o escapar da Terra.[14][15]


            Durante a batalha, Kurilin escuta Vegeta mencionar a origem de Piccolo,[15] e das esferas do dragão, o planeta Namekusei (ナメック星, Namekku-sei?), lar dos namekuseijins como Piccolo.[11][13] Enquanto Goku se recupera, Gohan, Kurilin e Bulma, vão para a Namekusei usar essas esferas do dragão para ressuscitar seus amigos mortos. No entanto, eles descobrem que o chefe de Vegeta, o tirano intergaláctico Freeza, também está em busca das esferas para obter a vida eterna. Vegeta, completamente curado, também vai para Namekusei procurando as esferas conta própria, o que resulta em várias batalhas entre ele e os capangas de Freeza. Percebendo que ele está sobrecarregado, Vegeta junta-se a Gohan e Kurilin para lutar contra a Forças Especiais Ginyu (ギニュー特戦隊, Ginyū Tokusentai?), uma grupo de mercenários contratados por Freza.[15] Quando Goku finalmente chega em Namekusei, trava uma batalha épica contra Freeza, que chega ao fim quando Goku se transforma no lendário Super Sayajin (超サイヤ人 Sūpā Saiya-jin??) e o derrota.[13][15]

            Ao retornar à Terra um ano depois, Goku encontra um viajante do tempo chamado Trunks, o futuro filho de Bulma e Vegeta. Trunks mata Freeza vindo à Terra como um ciborgue[16] em busca de vingança e seu pai Re Cold, Trunks adverte a Goku que um grupo de andróides (人造人間, Jinzōningen?) aparecerá três anos depois em busca de vingança contra Goku por destruir o Exército Red Ribbon quando ele era criança.[16] Durante este período, uma forma de vida maliciosa chamada Cell emerge e, depois de absorver os androides 17 e 18 para alcançar sua "forma perfeita", organiza seu torneio de artes marciais para decidir o destino da Terra. Depois que Goku sacrifica sua vida pela segunda vez, Gohan vinga seu pai ao derrotar a Cell depois de alcançar o segundo nível de Super Sayajin.[16]

            Sete anos depois, Goku é ressucitado por um dia para permitir que ele participasse da nova edição do torneio de artes marciais. Ele é arrastado para uma batalha com seus amigos contra um ser maléfico chamado Majin Boo.[16] Após inúmeras batalhas que levam à destruição e a recriação da Terra, Goku (cuja vida é permanentemente restaurada por Supremo Senhor Kaio) destrói Boo com um Genkidama que contém a energia de toda a Terra. Goku, alguns momentos antes de destruí-lo, espera que Majin Boo renascerá como boa pessoa, e dez anos depois, durante outro torneio de artes marciais, ele encontra sua reencarnação humana, Ub. Partindo a partida entre eles inacabados, Goku começa com Oob para educá-lo para se tornar o novo guardião da Terra.</p>

        <div class="wrapper">
            <div class="divider div-transparent"></div>
        </div>
        <svg class="separator" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 200">
            <image width="480" height="240" mask="url(#p8)" xlink:href="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c9/Naruto_logo.svg/320px-Naruto_logo.svg.png"></image>
        </svg>


        <h2>" Um dia EU serei o Hokage! "</h2>
        <p>A história principal se foca em Naruto e seu desenvolvimento quanto ninja, junto com os seus amigos. Também se centra nas interações entre estes e a influência do ambiente em suas personalidades. Conforme transcorre a série, Naruto se relaciona com Sasuke Uchiha e Sakura Haruno, com quem forma o “Time 7”, juntamente com o sensei Kakashi Hatake.[3] Cabe mencionar que Naruto confia muito neles assim como em em outros personagens que irá conhecendo mais adiante. Enquanto eles aprendem novas habilidades e conhecem novas pessoas e lugares em suas missões, Naruto luta por seu sonho de se tornar o líder máximo de sua aldeia (Hokage) e ser reconhecido como alguém importante.[4] No início, a série se enfoca no integrantes do Time 7, Naruto, Sasuke e Sakura.[3][5] Pouco depois, Orochimaru (um dos vilões mais procurados)[6] ataca a a Aldeia Oculta da Folha, assassinando o Terceiro Hokage em um ato de vingança pessoal.[7] Isso acaba desencadeando que Jiraiya, um dos três ninjas legendários,[8] inicie a busca da sua antiga companheira de equipe Tsunade para designa-la como a Quinta Hokage.[9] Durante a sua busca é revelado que Orochimaru quer encontrar Sasuke (a quem conhece por suas técnicas de dōjutsu)[10] para oferecer-lhe o poder que tanto deseja para matar seu irmão Itachi Uchiha,[11] responsável pelo assassinato de todo seu clã.[12][13] Sasuke aceita a proposta de Orochimaru e vai treinar com ele, traindo a sua aldeia.[14] Enquanto isso, Naruto decide fazer algo a respeito, e então resolve deixar a aldeia junto com Jiraiya durante dois anos e meio com o objetivo de treinar e prepara-se para a próxima vez que encontrar Sasuke, a quem tentará salvar.[15]</p>

        <div class="wrapper">
            <div class="divider div-transparent"></div>
        </div>
        <svg class="separator" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 200">
            <image width="480" height="240" mask="url(#p8)" xlink:href="https://upload.wikimedia.org/wikipedia/fr/thumb/4/45/Logo_Hunter_x_Hunter.svg/320px-Logo_Hunter_x_Hunter.svg.png"></image>
        </svg>

        <h2>" Eu não temo a morte. Eu só temo que minha raiva desapareça "</h2>
        <p>Doze anos antes do início da história, Ging Freecss deixou seu filho Gon nas mãos de sua tia Mito na Ilha da Baleia. Gon, que sempre acreditou que seus pais tinham morrido, descobre um dia graças ao aprendiz de seu pai, Kite, que ele ainda está vivo e se tornou um dos melhores Hunters,[1][2] indivíduos de elite e licenciados para rastrear tesouros secretos, animais exóticos e até mesmo outros indivíduos.[3] Motivado por esta revelação, Gon decide sair de casa e entrar no Exame Hunter,[4] que tem uma série de desafios que buscam testar suas habilidades, como de sobrevivência e trabalho em equipe de seus participantes.[1]

            Durante o exame, Gon, conhece e faz amizade com outros três participantes: Kurapika, o último membro do clã Kurta, que quer se tornar um Hunter, a fim de vingar sua família e recuperar os olhos escarlate que foram roubados de seus corpos por um grupo de mercenários conhecidos como Gen'ei Ryodan; Leorio, que só quer ser um Hunter para poder pagar seus estudos de medicina; e Killua Zoldyck, um jovem que deixou sua antiga vida como um membro da família mais famosa de assassinos.[5] Assim, este pequeno grupo de amigos embarcam em uma série de aventuras com cada um tentando conquistar seus objetivos.</p>
        <div class="divider div-transparent div-dot"></div>
    </main>


</div>
<script src="//static.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js"></script>
<script>var passiveSupported = false;
    try {
        window.addEventListener("test", null, Object.defineProperty({}, "passive", { get: function () { passiveSupported = true; } }));
    }
    catch (err) { }
    var height = document.querySelector('svg').getBoundingClientRect().height;
    addEventListener('scroll', function (e) {
        var percentage = Math.min(Math.max(pageYOffset / height, 0), 1);
        document.documentElement.style.setProperty('--pct', percentage);
    }, passiveSupported ? { passive: true } : false);
    //  link to open without iframe
    var inIframe = function () { try {
        return window.self !== window.top;
    }
    catch (e) {
        return true;
    } };
    if (inIframe())
        document.querySelector('.no-iframe').style.display = 'block';

    //# sourceURL=pen.js
</script>
</body></html>

