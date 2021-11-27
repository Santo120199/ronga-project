<!DOCTYPE HTML>
<html lang="it">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="icon" href="img/logo1.png" type="image/ico">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="node_modules/fullpage.js/dist/fullpage.css" />

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js"></script>
    <script type="text/javascript" src="node_modules/fullpage.js/dist/fullpage.js"></script>
    <title>Impresa Ronga | Home</title>
</head>
<body class="fp-responsive">
    
    <div id="fullPage" style="margin-top: 0;">
        <div class="section fp-auto-height-responsive" id="first" data-anchor="slide1">
            <?php include "navbar.html";?>
            <!--<img src="img/sacra12.JPG" alt="" id="sfondo-home"> -->
            <video src="img/video.mp4" id="sfondo-home" type="video/mp4" autoplay="true" muted="true"></video>
        </div>
        <div class="section s2 fp-section" id="scritta-home">
            <h2 class="pretitle" id="pretitle-home1">DAGLI ANNI 40'</h2>
            <h2 class="pretitle" id="pretitle-home">Il nostro DESIDERIO è quello di essere un <br> punto di riferimento per il restauro dei <br> Beni Culturali <br><br><br> PASSIONE, QUALITA' e INNOVAZIONE: <br>Questo ci permette di curare il nostro Patrimonio Artistico</h2>
        </div>
        <div class="section fp-auto-height-responsive">
            <div class="foto s1">
                <div class="gallery">
                    <a href="/rongaproject1/lavori/DuomoSalerno.php"><img src="/rongaproject1/img/Duomo di Salerno/DuomoSalerno Copertina.jpg" alt=""></a>
                </div>
                <div class="gallery">
                    <a href="/rongaproject1/lavori/Annunziata.php"><img src="/rongaproject1/img/Annunziata/Annunziata Copertina.png" alt=""></a>
                </div>
                <div class="gallery">
                    <a href="/rongaproject1/lavori/PalCitterio.php"><img src="/rongaproject1/img/Pal Citterio/PalCitterio Copertina.png" alt=""></a>
                </div>
                <div class="gallery">
                    <a href="/rongaproject1/lavori/OspedaleSpiritoSanto.php"><img src="img/Ospedale Lecce/OspedaleSpiritoSanto Copertina.jpg" alt=""></a>
                </div>
                <div class="gallery">
                    <a href="/rongaproject1/lavori/CertosaPadula.php"><img src="img/Certosa di Padula/CertosaPadula Copertina.jpg" alt=""></a>
                </div>
                <div class="gallery">
                    <a href="/rongaproject1/lavori/VillaRufolo.php"><img src="img/Villa Rufolo/VillaRufolo Copertina.jpg" alt=""></a>
                </div>
            </div>
        </div>
        <div class="section ">
            <h1 class="title">ALCUNI COMMITENTI</h1>
            <img src="img/Brochure Ronga (2).png" id="committenti" alt="">
            <button id="btnTop" onclick="">
                <i class="material-icons">arrow_upward</i>
            </button>
            <!-- 
            <div class="slider">
                <div class="slider-track">
                    <div class="slides">
                        <img src="img/logo Mibact.png" alt="">
                    </div>
                    <div class="slides">
                        <img src="img/logo montevergine.png" alt="">
                    </div>
                    <div class="slides">
                        <img src="img/logo musei torino.png" alt="">
                    </div>
                    <div class="slides">
                        <img src="img/logo paestum.png" alt="">
                    </div>
                    <div class="slides">
                        <img src="img/logo Sacra.png" alt="">
                    </div>
                    <div class="slides">
                        <img src="img/logo salerno.png" alt="">
                    </div>
                    <div class="slides">
                        <img src="img/logo villa rufolo.png" alt="">
                    </div>
                </div>
            </div>
            -->
        </div>
    </div>
    
    
    <script>
        new fullpage('#fullPage', {

            autoscrolling: true,
            paddingTop: 0,
            marginTop: 0,
            scrollingSpeed: 700
        });

        const btnTop = document.querySelector("#btnTop");
        const first = document.getElementById("first");
        const scritta = document.getElementById("scritta-home");
        const bod = document.getElementsByName("body");
        btnTop.addEventListener("click",function (){
            
            fullpage_api.setScrollingSpeed(1300);
            fullpage_api.moveTo('slide1');
        });

        const mediaQuery = window.matchMedia('(max-width: 768px');
        function myFunct(mediaQuery){
            if (mediaQuery.matches){
                fullpage_api.destroy('all');
                fullpage_api.setAutoScrolling(false);
                btnTop.addEventListener("click",function(){
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                })
            }
            else {
                fullpage_api.reBuild();
                new fullpage('#fullPage', {

                    autoscrolling: true,
                    paddingTop: 0,
                    marginTop: 0,
                    scrollingSpeed: 700
                });
                fullpage_api.setAutoScrolling(true);
            }
        }
        myFunct(mediaQuery);
        mediaQuery.addListener(myFunct);
    </script>
    
</body>


<script type="text/javascript" src="js/vanilla-tilt.js"></script>
<script>
</script>
<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js"></script>

</html>