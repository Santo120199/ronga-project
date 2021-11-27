<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="icon" href="img/FAVICON_RONGA.png" type="image/ico">
    <link rel="stylesheet" href="css/style.css">
    <title>Impresa Ronga | Certificazioni</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
</head>
<body>
    <?php include "navbar.html" ?>

    <h1 class="title">LE NOSTRE CERTIFICAZIONI</h1>
    <hr class="line">
    <h1 class="cat">SOA</h1>
    <p class="cat-descr">Sin dai primi anni di attività, la Salvatore Ronga s.r.l. ha operato in conformità della legge soddisfacendo <br>costantemente gli standard qualitativi imposti dagli enti di competenza.</p>
    <div class="skills">
        <div class="skill">
            <div class="skill-name">OG2 <span>(Restauro e manutenzione dei beni immobili sottoposti a tutela)</span></div>
            <div class="skill-bar">
                <div class="skill-per" per="100" name="VIII"></div>
            </div>
        </div>
        <div class="skill">
            <div class="skill-name">OS25 <span>(Scavi Archeologici)</span></div>
            <div class="skill-bar">
                <div class="skill-per" per="80" name="IV-BIS"></div>
            </div>
        </div>
        <div class="skill">
            <div class="skill-name">OS2-A <span>(Superfici decorate di beni immobili)</span></div>
            <div class="skill-bar">
                <div class="skill-per" per="60" name="IV"></div>
            </div>
        </div>
        <div class="skill">
            <div class="skill-name">OG11 <span>(Impianti tecnologici)</span></div>
            <div class="skill-bar">
                <div class="skill-per" per="40" name="III-BIS"></div>
            </div>
        </div>
        <div class="skill">
            <div class="skill-name">OS6 <span>(Finiture di opere generali in materiali lignei)</span></div>
            <div class="skill-bar">
                <div class="skill-per" per="20" name="III"></div>
            </div>
        </div>
    </div>

    <hr class="line">

    <h1 class="cat">QUALITA'</h1>
    <p class="cat-descr">Sin dai primi anni di attività, la Salvatore Ronga s.r.l. ha operato in conformità della legge soddisfacendo <br>costantemente gli standard qualitativi imposti dagli enti di competenza.</p>

    <ul class="qualità">
        <li>ISO 9001 - 2015  <span>Sistema di gestione Qualità</span></li><br>
        <li>ISO 14000 - 2015 <span>Sistema di gestione Ambientale</span></li><br>
        <li>ISO 45001 <span>Sistema di gestione a tutela della Sicurezza e tutela dei lavoratori</span></li>
    </ul>

    <hr class="line">

    <h1 class="cat cat-rating">RATING DI LEGALITA' <span> &#9733; ++</span>  </h1>
    <p class="cat-descr">Grazie alla correttezza dimostrata negli anni, si è vista attribuire un punteggio di "&#9733;++" dall'Autorità Garante della <br>
        Concorrenza e del Mercato <br>
        Questo, poi, nel 2018 le ha permesso di esser selezionata come una tra le migliori imprese del territorio dalla <br>
        Cassa Edile Salernitana.
    </p>

    <h1 class="title">SCARICALI QUI</h1>
    <div class="certificati">
        <div class="certificato">
            <a href="img/Rating-di-Legalità.png"><img src="img/Rating-di-Legalità.png" alt=""></a>
            <div class="caption">
                <span>Rating di Legalità</span>
            </div>
        </div>
        <div class="certificato">
            <a href="img/Certificati-ISO-14001-2015.jpg"><img src="img/Certificati-ISO-14001-2015.jpg" alt=""></a>
            <div class="caption">
                <span>ISO 14001-2015</span>
            </div>
        </div>
        <div class="certificato">
            <a href="img/Certificato-ISO-14001.jpg"><img src="img/Certificato-ISO-14001.jpg" alt=""></a>
            <div class="caption">
                <span></span>
            </div>
        </div>
        <div class="certificato">
            <a href="img/Certificato-Soa.jpg"><img src="img/Certificato-Soa.jpg" alt=""></a>
            <div class="caption">
                <span>Certificato SOA</span>
            </div>
        </div>
        <div class="certificato">
            <a href="img/ISO-9001.jpg"><img src="img/ISO-9001.jpg" alt=""></a>
            <div class="caption">
                <span>ISO 9001-2015</span>
            </div>
        </div>
    </div>



    <?php include "footer.html" ?>

    <script src="js/app.js"></script>

    <script>
        $('.skill-per').each(function(){
            var $this = $(this);
            var per = $this.attr('per');
            $this.css("width",per+'%');
            $({animatedValue: 0}).animate({animatedValue: per},{
                duration: 1000,
                step: function(){
                    $this.attr('per',Math.floor(this.animatedValue));
                },
                complete: function(){
                    $this.attr('per',Math.floor(this.animatedValue));
                }

            });
        });

        const btnTop = document.querySelector("#btnTop");
        const first = document.getElementById("first");


        btnTop.addEventListener("click",function (){
            
            window.scrollTo(0,0);
        });
    </script>
    
</body>
</html>