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

    <title>Impresa Ronga | Scavo Archeologico Leporano</title>
</head>
<body>
    <?php include "../navbar.html" ?>

    <div class="main-work">
        <h1 class="title" id="titleLav">SCAVO ARCHEOLOGICO DI LEPORANO</h1>
        <img src="/rongaproject1/img\Leporano\Leporano Copertina.png" alt="">
        <div class="main-text">
            <h2>SCAVO ARCHEOLOGICO DI LEPORANO</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque ex sit fugiat neque, eaque, corporis eos, eveniet dolorem sunt labore adipisci perferendis dolore non nulla. Ipsa asperiores vel quaerat voluptas iste unde repellat adipisci. Ut dolorum saepe, iusto non praesentium nesciunt quaerat nihil blanditiis perspiciatis rerum iure sequi quisquam dicta eligendi, alias numquam minus repellendus aperiam cum nemo, officia rem repellat eos! Repudiandae enim eaque qui officiis. Labore aliquam doloribus, rerum quo, harum adipisci a commodi ab eos suscipit tempora.</p>
        </div>
    </div>

    <hr class="line">
    <div class="info">
        <h2 id="intestazione">Dettagli</h2>
        <hr class="line-vertical dett">
        <p>ANNO <br>
           ..... <br>
           LUOGO <br>
           Leporano (TA) 
        </p>
        <hr class="line-vertical dett" style="margin-left: 125px;">
        <p>COMMITENTE <br>
           ............. <br>
           CATEGORIA <br>
           ........
        </p>
    </div>
    <div class="wrapper">
        <div class="galleria">
            <div class="image"><span><img src="/rongaproject1/img\Leporano\Leporano 1.JPG" alt=""></span></div>
            <div class="image"><span><img src="/rongaproject1/img\Leporano\Leporano 2.JPG" alt=""></span></div>
            <div class="image"><span><img src="/rongaproject1/img\Leporano\Leporano 3.JPG" alt=""></span></div>
            <div class="image"><span><img src="/rongaproject1/img\Leporano\Leporano 4.JPG" alt=""></span></div>
            <div class="image"><span><img src="/rongaproject1/img\Leporano\Leporano 5.JPG" alt=""></span></div>
            <div class="image"><span><img src="/rongaproject1/img\Leporano\Leporano 6.JPG" alt=""></span></div>
            <div class="image"><span><img src="/rongaproject1/img\Leporano\Leporano 7.JPG" alt=""></span></div>
            <div class="image"><span><img src="/rongaproject1/img\Leporano\Leporano 8.JPG" alt=""></span></div>
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
            <h2 id="text-mobile">Leporano, Puglia</h2>
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