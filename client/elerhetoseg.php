<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HUTOURS-CONTACT</title>
</head>
<body class="bg-light">
    <div class="my-5 px-4">
    <h3 class="fw-bold text-center">Írj nekünk</h3>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">Ha bármi kérdése van írjon nekünk!</p>
</div>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                    <div class="bg-white rounded shadow p-4">
                        <h5>Címünk</h5>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10782.359110266274!2d19.104993471728143!3d47.49790435107655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741dc97d2128109%3A0xba65a2a8b73a8678!2sBudapest%2C%20Hung%C3%A1ria%20krt.%2030%2C%201087%20Magyarorsz%C3%A1g!5e0!3m2!1shu!2ses!4v1677059816078!5m2!1shu!2ses" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    
                <h5 class="mt-4">Hívjon minket</h5>
                <a href="" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i>+361555555
                </a>  

                <h5 class="mt-4">Email címünk</h5>
                <a href="" class="d-inline-block text-decoration-none text-dark">
                    <i class="bi bi-envelope-fill"></i>
                    hutours@gmail.com
                </a>

                <h5 class="mt-4">Kövessen minket közösségi oldalainkon is!</h5>
                <a href="" class="d-inline-block mb-3">
                    <span class="badge bg-light text-dark fe-6 p-2">
                    <i class="bi bi-facebook me-1"></i>
                    Facebook
                    </span>
                </a>

                <a href="" class="d-inline-block mb-3">
                    <span class="badge bg-light text-dark fe-6 p-2">
                    <i class="bi bi-instagram me-1"></i>
                    Instagram
                    </span>
                </a>

                    
                    
                </div>
            </div>


            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                        <h5 class="text-center fw-bold">Küldj nekünk üzenetet!</h5>

                        <div class="mt-3">
                            <label class="form-label">Név</label>
                            <input type="text" class="form-control shadow-none">
                        </div>

                        <div class="mt-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control shadow-none">
                        </div>

                        <div class="mt-3">
                            <label class="form-label">Tárgy</label>
                            <input type="text" class="form-control shadow-none">
                        </div>

                        <div class="mt-3">
                            <label class="form-label">Írj nekünk!</label>
                            <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                        </div>

                        <div class="mt-3">
                        <input type="checkbox" id="vehicle1" value="Hírlevél">
                        <label>Iratkozz fel hírlevelünkre!</label>
                        <br>
                        </div>

                            <button type="button" class="btn btn-primary shadow-none">Küldés</button>
                    
                </div>
                
            </div>

        </div>

    </div>

    <?php require('labjegyzet.php'); ?>
    
    
</body>
</html>