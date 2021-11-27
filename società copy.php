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
    <div  class="flex-row">
        <div id="testo-header-newhome">
            <h1>Curiamo il nostro</h1>
            <h1>patrimonio</h1>
        </div>
    </div>
    <section id="testo-newhome">
        <article>
            <h1>Lorem ipsum dolor sit amet.</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, exercitationem?</p>
        </article>
    </section>
    
    


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
