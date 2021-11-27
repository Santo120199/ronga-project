<!DOCTYPE HTML>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="icon" href="img/FAVICON_RONGA.png" type="image/ico">

    <link rel="stylesheet" href="css/style.css">

    <title>Impresa Ronga | Società</title>
</head>
<body>
    <?php include "navbar.html" ?>

    <h2 class="pretitle">DAGLI ANNI '40 </h2>
    <h1 class="title title-soc" id="mobile-soc">Operiamo per restituire <br> la storia ai nostri figli.</h1>
    <img src="img/foto-societa.jpg" id="fotosocietà" alt="">

    <h2 class="pretitle pretitle-pers">LA NOSTRA STORIA</h2>
    <p class="text text-pers">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit quia beatae odit commodi fuga enim illo tempora reprehenderit eius nesciunt facere molestias accusamus nostrum explicabo inventore saepe obcaecati neque illum deserunt dignissimos, suscipit minus similique magni. Voluptatem, iure accusamus vitae dolorum unde laborum alias quia incidunt suscipit ut in soluta. Itaque cupiditate id minima voluptates. Voluptatum eligendi non neque aliquam qui nemo facilis ex, dolorum vel libero nostrum laudantium eum repudiandae quibusdam quisquam error recusandae, earum necessitatibus ducimus quos itaque aspernatur minima. Architecto, aut! Labore expedita dolorem in laborum ipsa repellendus, neque accusantium, nesciunt nihil molestias esse aliquam placeat sed?</p>

    <hr class="line l-soc">
    <div class="info infosoc">
        <div class="info1">
            <h2 class="pretitle pretitle-pers">LA MISSION</h2>
            <p style="font-size: 18px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem consectetur temporibus quae eveniet, culpa dignissimos ratione cumque facilis nisi harum minima qui. Magnam nihil cupiditate repudiandae quod dolor, quidem saepe eum illum? Consequatur recusandae provident nulla debitis sapiente veritatis dolorum delectus facilis tenetur sequi? Earum atque reprehenderit commodi ab nulla.</p>
        </div>
        <hr class="line-vertical line-soc">
        <hr class="line" id="mobile-line-soc">
        <div class="info1">
            <h2 class="pretitle pretitle-pers">IL TEAM</h2>
            <p style="font-size: 18px;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem voluptate quasi dolor ducimus mollitia adipisci nam. Cum, animi omnis aliquam nam modi tempore! Accusamus voluptatibus ipsum ab sequi quo! Amet provident numquam repellendus odit et modi sit necessitatibus, quasi magni perferendis est voluptates reiciendis dolore dignissimos laboriosam deserunt voluptas. Laborum?</p>
        </div>
    </div>

    <?php include "footer.html" ?>

    <script>
        const line = document.querySelector('.line-vertical');

        const mediaQuery = window.matchMedia('screen and (min-width:767px) and (max-width:1023px)');
     

        function myFunct(mediaQuery){
            if(mediaQuery.matches){
                line.style.display = "none";
            }
        }
        myFunct(mediaQuery);
        mediaQuery.addListener(myFunct);

    </script>
</body>
