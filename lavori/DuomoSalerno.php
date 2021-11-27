<!DOCTYPE HTML>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="icon" href="img/FAVICON_RONGA.png" type="image/ico">

    <link rel="stylesheet" href="/rongaproject1/css/style.css">

    <title>Impresa Ronga | Duomo di Salerno</title>
</head>
<body>
    <?php include "../navbar.html" ?>
    <h1 class="title">DUOMO DI SAN MATTEO</h1>
    <div class="main-work">
        <h1 class="title" id="titleLav">DUOMO DI SALERNO</h1>
        <img src="/rongaproject1/img\Duomo di Salerno\DuomoSalerno Copertina.jpg" alt="">
        <div class="main-text">
            <h1 class="storia">STORIA</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque ex sit fugia
                 nihil blanditiis perspiciatis , alias numquam minus repellendus aperiam cum nemo, officia rem repellat eos! Repudiandae enim eaque qui officiis. Labore aliquam doloribus, rerum quo, harum adipisci a commodi ab eos suscipit tempora.
            </p>
            <h1 class="storia">RESTAURO</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque ex sit fugia
                 nihil blanditiis perspiciatis , alias numquam minus repellendus aperiam cum nemo, officia rem repellat eos! Repudiandae enim eaque qui officiis. Labore aliquam doloribus, rerum quo, harum adipisci a commodi ab eos suscipit tempora.
            </p>
        </div>
    </div>

    <hr class="line line-pers">
    <div class="info info-pers">
        <h2 id="intestazione">Dettagli</h2>
        <hr class="line-vertical dett">
        <p>ANNO <br>
           <span>2010</span> <br>
           LUOGO <br>
           <span>Salerno (SA)</span> 
        </p>
        <hr class="line-vertical dett" style="margin-left: 125px;">
        <p>COMMITENTE <br>
           <span>Sovrintendenza di Salerno </span> <br>
           CATEGORIA <br>
           <span>OG2 - OS6 </span> 
        </p>
    </div>
    <div class="wrapper">
        <div class="galleria">
            <div class="image"><span><img src="/rongaproject1/img\Duomo di Salerno\DuomoSalerno 1.jpg" alt=""></span></div>
            <div class="image"><span><img src="/rongaproject1/img\Duomo di Salerno\DuomoSalerno 2.jpg" alt=""></span></div>
            <div class="image"><span><img src="/rongaproject1/img\Duomo di Salerno\DuomoSalerno 3.jpg" alt=""></span></div>
            <div class="image"><span><img src="/rongaproject1/img\Duomo di Salerno\DuomoSalerno 4.jpg" alt=""></span></div>
            <div class="image"><span><img src="/rongaproject1/img\Duomo di Salerno\DuomoSalerno 5.jpg" alt=""></span></div>
            <div class="image"><span><img src="/rongaproject1/img\Duomo di Salerno\DuomoSalerno 6.jpg" alt=""></span></div>
            <div class="image"><span><img src="/rongaproject1/img\Duomo di Salerno\DuomoSalerno 7.jpg" alt=""></span></div>
            <div class="image"><span><img src="/rongaproject1/img\Duomo di Salerno\DuomoSalerno 8.jpg" alt=""></span></div>
            <div class="image"><span><img src="/rongaproject1/img\Duomo di Salerno\DuomoSalerno 7.jpg" alt=""></span></div>
            <div class="image"><span><img src="/rongaproject1/img\Duomo di Salerno\DuomoSalerno 8.jpg" alt=""></span></div>
        </div>
    </div>

    <div class="preview-box">
        <div class="details-popup">
            <span class="title-popup">
                Image <p class="current-img"></p>
                of <p class="total-img"></p>
            </span>
            <span class="icon fas fa-times"></span>
        </div>
        <div class="img-box">
            <div class="slide prev">
                <i class="fas fa-angle-left"></i>
            </div>
            <div class="slide next">
                <i class="fas fa-angle-right"></i>
            </div>
            <img src="" alt="">
        </div>
    </div>
    <div class="shadow">

    </div>
    
    
    <hr>

    <div class="main-work">
        <div class="main-text">
            <h2 id="text-mobile">Salerno, Campania</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui quod placeat quae molestias et sunt ea non cum voluptates! Architecto rerum expedita et dolore sint beatae exercitationem ut autem molestiae?</p>
        </div>
        <img src="/rongaproject1/" alt="" id="cartina">
    </div>


    <?php include "../footer.html" ?>

   
    <script>
        const galleria = document.querySelectorAll(".galleria .image"),
        previewBox = document.querySelector(".preview-box"),
        previewImg = previewBox.querySelector("img"),
        closeIcon = previewBox.querySelector(".icon"),
        currentImg = previewBox.querySelector(".current-img"),
        totalImg = previewBox.querySelector(".total-img"),
        shadow = document.querySelector(".shadow");

        window.onload = ()=>{
            for (let i = 0; i < galleria.length; i++) {

                totalImg.textContent = galleria.length-1;

                let newIndex = i;
                let clickImgIndex;

                galleria[i].onclick = ()=>{
                    clickImgIndex = newIndex;
                    function preview(){
                        currentImg.textContent = newIndex + 1;
                        let selectedImgUrl = galleria[newIndex].querySelector("img").src;
                        previewImg.src = selectedImgUrl;
                        console.log(selectedImgUrl);
                    }

                    //previus and next
                    const prevBtn = document.querySelector(".prev"),
                    nextBtn = document.querySelector(".next");

                    if(newIndex == 0){
                        prevBtn.style.display = "none";
                    }
                    if(newIndex >= galleria.length -1){
                        nextBtn.style.display = "none";
                    }


                    prevBtn.onclick = ()=>{
                        newIndex--;
                        if(newIndex == 0){
                            preview();
                            prevBtn.style.display = "none";
                        }else{
                            preview();
                            nextBtn.style.display = "block";
                        }
                    }

                    nextBtn.onclick = ()=>{
                        newIndex++;
                        if(newIndex >= galleria.length - 1){
                            preview();
                            nextBtn.style.display = "none";
                        }else{
                            preview();
                            prevBtn.style.display = "block";
                        }
                    }


                    preview();
                    previewBox.classList.add("show");
                    shadow.style.display = "block";
                    document.querySelector("body").style.overflow = "hidden";

                    closeIcon.onclick = ()=>{
                        newIndex = clickImgIndex;
                        prevBtn.style.display = "block";
                        nextBtn.style.display = "block";
                        previewBox.classList.remove("show");
                        shadow.style.display = "none";
                        document.querySelector("body").style.overflow = "auto";
                    }
                }
            }
        }
        

    </script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9CM0-VU7fku7435_9IYeOFz7PdlLdBr0&callback=initMap&libraries=&v=weekly"
      async>
</script>
</body>