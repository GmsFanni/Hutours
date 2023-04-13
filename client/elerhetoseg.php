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
                <div id="message"></div>
                <form action="../server/velemeny.php" method="POST" id="myForm">
                        <h5 class="text-center fw-bold">Küldj nekünk üzenetet!</h5>

                        <div class="mt-3" >
                            <label class="form-label" for="v_nev" id="velemeny-form">Név</label>
                            <input type="text" class="form-control shadow-none" id="v_nev" name="v_nev" required>
                           
                        </div>

                        <div class="mt-3">
                            <label class="form-label" for="v_email">Email</label>
                            <input type="email" class="form-control shadow-none" id="v_email" name="v_email" required>
                            
                        </div>

                        <div class="mt-3">
                            <label class="form-label" for="v_targy">Tárgy</label>
                            <input type="text" class="form-control shadow-none" id="v_targy" name="v_targy">
                            
                        </div>

                        <div class="mt-3">
                            <label class="form-label" for="v_szoveg">Írj nekünk!</label>
                            
                            <textarea class="form-control shadow-none" rows="5" maxlength="250" style="resize: none;" id="v_szoveg" name="v_szoveg"></textarea>
                            <small class="form-text text-muted float-end"><span id="charCount" class="float-right">0</span>/250</small>
                        </div>
                            <br>
                        <input type="button" value="Küldés" class="btn btn-primary shadow-none " id="myButton" onclick="klikk()">
                        
                        </div>
                        
                    </form>
                </div>

                
            </div>

        </div>

    </div>
    
    <?php require('labjegyzet.php'); ?>

    
    <script src="verifyemail.js"></script>
    <script>

        function updateCharCount() {
            var textarea = document.getElementById("v_szoveg");
            var charCount = document.getElementById("charCount");
            charCount.textContent = textarea.value.length;
        }
        var textarea = document.getElementById("v_szoveg");
        textarea.addEventListener("input", updateCharCount);

        function uresCheck(){
            const nev = document.getElementById('v_nev').value;
            const email = document.getElementById('v_email').value;
            const targy = document.getElementById('v_targy').value;
            const area = document.getElementById('v_szoveg').value;


            if (nev.value != "" && email.value !="" && targy.value !="" && area.value !="") return true;
            else{ alert("Töltse ki az összes mezőt");  return false; }
        }

        function verifyemail(str){
            if (str.indexOf("@") !== -1 && str.indexOf(".") !== -1) 
                return true;
            else 
                return false;
        }

        function tartalmaz(){
            var email2 = document.getElementById("v_email").value;
            return verifyemail(email2);

            
        }
        
                	


    

        function klikk(){
            /*
            if (!uresCheck()) return false;
            if (!tartalmaz()) {
            alert("Hibás email cím!") ;
            return false ;
            }
            */

            console.log(uresCheck());
            console.log(tartalmaz());

            if (uresCheck() == false || tartalmaz() == false) {
                alert("Hibás kitöltés.");
            } else {
                var fd = new FormData();
                fd.append("v_nev", document.getElementById("v_nev").value);
                fd.append("v_email", document.getElementById("v_email").value);
                fd.append("v_targy", document.getElementById("v_targy").value);
                fd.append("v_szoveg", document.getElementById("v_szoveg").value);
                $.ajax({
                    url: '../server/velemeny.php',
                    type: 'POST',
                    data: fd,
                    processData: false,
                    contentType: false,
                    enctype: 'multipart/form-data',
                    success: function(response) {
                        let jsonData = JSON.parse(response);
                        console.log(jsonData);
                        if(jsonData.success == 1){
                            alert("Köszönjük kérdését, kollegánk hamarosan felveszi önnel a kapcsolatot!")
                            document.getElementById("myForm").reset();  
                            //location.href = 'index.php';
                        }
                        else{
                            alert("HIBAA")
                        }
                        
                        
                    }
                    
    
                });
            }
    

            /*
// felugró ablak bezárása
                $('#message').click(function() {
                    $(this).fadeOut();
                    
                });
            */

            $(document).ready(function() {
                // form küldése AJAX-szal

                

                /*
                $('#myForm').submit(function(event) {
                    event.preventDefault();
                    
                });
                */
                
                
            });

    }

        
    </script>

       
    
    
</body>
</html>