<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <title>HUTOURS</title>
</head>

<body>
<div class="container-fluid px-lg-4 mt-4">

<div class="swiper swiper-container">
            <div class="swiper-wrapper">
            <div class="swiper-slide"><img loading="lazy" src="photos/bpkep.jpg" class="w-100 d-block"/><div class="swiper-lazy-preloader"></div></div>
            <div class="swiper-slide"><img loading="lazy" src="photos/aggtelek.jpg" class="w-100 d-block" /><div class="swiper-lazy-preloader"></div></div>
            <div class="swiper-slide"><img loading="lazy" src="photos/keszthelykep.jpg" class="w-100 d-block" /><div class="swiper-lazy-preloader"></div></div>
            <div class="swiper-slide"> <img loading="lazy" src="photos/villanykep.jpg" class="w-100 d-block" /><div class="swiper-lazy-preloader"></div></div>
            
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
</div>


<div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 p-4 mb-lg-0 mb-3 mt-5 bg-white rounded">
            <h2 class=" pt-4 mb-4 text-center fw-bold h-font">Foglalj le egyszerűen egy utat Magyarországra a HUTOURSNÁL!</h2>
          
        <div class="container mt-5">
          <div class="row">
            <div class="col-md-3 col-lg-3 text-center">
              <h3>Lépés 1</h3>
              <p>Kattints a gombra!</p>
              <a href="index.php?prog=jaratok.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">GOMB</a>
            </div>
            <div class="col-md-3 col-lg-3 text-center">
              <h3>Lépés 2</h3>
              <p>Válaszd ki azt ahova szeretnél utazni.</p>
              <h1><i class="bi bi-pin-map-fill"></i></h1>
            </div>
            <div class="col-md-3 col-lg-3 text-center">
              <h3>Lépés 3</h3>
              <p>Foglald le!</p>
              <h1><i class="bi bi-check2-square"></i></h1>
            </div>
            <div class="col-md-3 col-lg-3 text-center">
              <h3>Lépés 4</h3>
              <p>Élvezd az utazás élményét!</p>
              <h1><i class="bi bi-bus-front"></i></h1>
            </div>
          </div>
        </div>
                
                    </div>
                </div>
    </div>




<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Elhelyezkedésünk</h2>
    <div class="container">
        <div class="row">
            <div class="divos col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2562.787918684254!2d19.106382439348042!3d47.49714115444925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741dc97d2128109%3A0xba65a2a8b73a8678!2sBudapest%2C%20Hung%C3%A1ria%20krt.%2030%2C%201087!5e0!3m2!1shu!2shu!4v1678352263009!5m2!1shu!2shu" width="800" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
            </div>

            <div class="col-lg-4 col-md-4">
            <div class="bg-white p-4 rounded mb-3">
                <div class="badge bg-light text-dark fs-6 p-2">
                    <h5>Irodánk Nyitvatartása</h5>

            </div>
            <div>
                <p>Hétfő: 08:00-15:00</p>
                <p>Kedd: 08:00-15:00</p>
                <p>Szerda: 08:00-15:00</p>
                <p>Csütörtök: 08:00-15:00</p>
                <p>Péntek: 08:00-15:00</p>
                <p>Szombat: 08:00-12:00</p>
                <p>Vasárnap: ZÁRVA!</p>


                </div>
              </div>  

            </div>
        </div>
    </div>



            <?php require('labjegyzet.php'); ?>
    

        
        
     <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


        <script>
                var swiper = new Swiper(".swiper-container", {
                spaceBetween: 30,
                centeredSlides: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                effect: 'fade',
                    fadeEffect: {
                        crossFade: true
                },
                });
        </script>

</body>
</html>