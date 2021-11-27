<!DOCTYPE HTML>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="icon" href="img/FAVICON_RONGA.png" type="image/ico">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">

    <title>Impresa Ronga | Lavori</title>
</head>
<body>
    <?php include "navbar.html" ?>

    
    <h1 class="title">I NOSTRI LAVORI</h1>
    <hr class="line">
    <div class="filtro">
        <ul>
            <li class="list active" data-filter="all">Tutti</li>
            <li class="list" data-filter="mobile">Restauro</li>
            <li class="list" data-filter="camera">Scavi</li>
            <li class="list" data-filter="watch">Laboratorio</li>
            <li class="list" data-filter="watch">Analisi</li>
            <li class="list" data-filter="watch">Consolidamento</li>
        </ul>
    </div>
    <div class="foto">
        <div class="gallery mobile">
            <a href="/rongaproject1/lavori/DuomoSalerno.php"><img src="/rongaproject1/img/Duomo di Salerno/DuomoSalerno Copertina.jpg" alt=""></a>
            <div class="descr">DUOMO DI SALERNO <br>
                <span>Salerno (SA)</span> 
            </div>
        </div>
        <div class="gallery camera">
            <a href="/rongaproject1/lavori/Annunziata.php"><img src="/rongaproject1/img/Annunziata/Annunziata Copertina.png" alt=""></a>
            <div class="descr">CHIESA DELLA SS. ANNUNZIATA <br>
                <span>Salerno (SA)</span>
            </div>
        </div>
        <div class="gallery watch">
            <a href="lavoro.php"><img src="img/sacra.jpg" alt=""></a>
            <div class="descr">SACRA DI SAN MICHELE <br>
                <span>Sant' Ambrogio di Torino (TO)</span>
            </div>
        </div>
        <div class="gallery mobile">
            <a href="/rongaproject1/lavori/PalCitterio.php"><img src="/rongaproject1/img/Pal Citterio/PalCitterio Copertina.png" alt=""></a>
            <div class="descr">PALLAZZO CITTERIO <br>
                <span>Milano (MI)</span>
            </div>
        </div>
        <div class="gallery camera">
            <a href="lavoro.php"><img src="img/sacra-sindone torino.jpg" alt=""></a>
            <div class="descr">CAPPELLA DELLA SACRA SINDONE <br>
                <span>Torino (TO)</span>
            </div>
        </div>
        <div class="gallery watch">
            <a href="/rongaproject1/lavori/OspedaleSpiritoSanto.php"><img src="img/Ospedale Lecce/OspedaleSpiritoSanto Copertina.jpg" alt=""></a>
            <div class="descr">EX OSPEDALE DELLO SPIRITO SANTO<br>
                <span>Lecce (LE)</span>
            </div>
        </div>
        <div class="gallery watch">
            <a href="/rongaproject1/lavori/CertosaPadula.php"><img src="img/Certosa di Padula/CertosaPadula Copertina.jpg" alt=""></a>
            <div class="descr">CERTOSA DI PADULA<br>
                <span>Padula (SA)</span>
            </div>
        </div>
        <div class="gallery watch">
            <a href="/rongaproject1/lavori/VillaRufolo.php"><img src="img/Villa Rufolo/VillaRufolo Copertina.jpg" alt=""></a>
            <div class="descr">VILLA RUFOLO<br>
                <span>Ravello (SA)</span>
            </div>
        </div>
        <div class="gallery watch">
            <a href="/rongaproject1/lavori/Leporano.php"><img src="img/Leporano/Leporano Copertina.png" alt=""></a>
            <div class="descr">PARCO ARCHEOLOGICO SATURO<br>
                <span>Leporano (TA)</span>
            </div>
        </div>
        <div class="gallery watch">
            <a href="/rongaproject1/lavori/SantAntonio.php"><img src="img/Sant'Antonio/SantAntonio Copertina.JPG" alt=""></a>
            <div class="descr">CHIESA DI SANT'ANTONIO<br>
                <span>Taranto (TA)</span>
            </div>
        </div>
        <div class="gallery watch">
            <a href="/rongaproject1/lavori/TempioBacco.php"><img src="img/Tempio di Bacco/TempioBacco Copertina.jpg" alt=""></a>
            <div class="descr">TEMPIO DI BACCO<br>
                <span>Ravello (SA)</span>
            </div>
        </div>
    </div>
  

    <?php include "footer.html" ?>


    <script type="text/javascript">
    
        $(document).ready(function(){
            $('.list').click(function(){
                const value = $(this).attr('data-filter');
                if(value == 'all'){
                    $('.gallery').show('1000');
                }
                else {
                    $('.gallery').not('.'+value).hide('1000');
                    $('.gallery').filter('.'+value).show('1000');
                }
            })
            //add active class on selected item
            $('.list').click(function(){
                $(this).addClass('active').siblings().removeClass('active');
            })
        })
    </script>
    
</body>