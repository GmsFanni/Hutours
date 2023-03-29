<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Regisztráció</title>
</head>
<body>
    
<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form>
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center">
                        <i class="bi bi-person-lines-fill fs-3 me-2"></i>Regisztráció
                    </h5>
                    <button type="reset" id="register-close" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

            <div class="modal-body" id="register-modal-body">
                <span class="badge bg-light text-dark mb-3 text-wrap lh-base">Töltse ki a megadott ürlapot a mezőknek megfelelően és regisztráljon!</span>
                <div class="container-fluid">
                    <div class="row">
                       <!--
                        <div class="col-md-4 ps-0 mb-3">
                            <label class="form-label">Vezetéknév</label>
                            <input id="VezetekN" type="text" class="form-control shadow-none">
                        </div>
                        <div class="col-md-4 ps-0 mb-3">
                            <label class="form-label">Keresztnév</label>
                            <input id="KeresztN" type="text" class="form-control shadow-none">
                        </div> -->
                        <div class="col-md-4 ps-0 mb-3">
                            <label class="form-label">Felhasználónév</label>
                            <input id="username" name="username" onblur="vrfUsername(this)" type="text" class="form-control shadow-none">
                        </div>
                        <div class="col-md-4 ps-0 mb-3">
                            <label class="form-label">Email cím</label>
                            <input id="email" name="email" onblur="vrfEmail(this)" type="email" class="form-control shadow-none">
                        </div>
                        <div class="col-md-4 ps-0 mb-3">
                            <label class="form-label">Jelszó</label>
                            <input id="passw" name="password" type="password" class="form-control shadow-none">
                        </div>
                        <!--
                        <div class="col-md-4 ps-0 mb-3">
                            <label class="form-label">Jelszó mégegyszer</label>
                            <input id="Pass2" type="password" class="form-control shadow-none">
                        </div>
                        <div class="col-md-6 ps-0 mb-3">
                            <label class="form-label">Születési idő</label>
                            <input id="birth" type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-md-6 ps-0 mb-3">
                            <label class="form-label">Telefonszám</label>
                            <input id="phone" type="number" class="form-control shadow-none">
                        </div>
                        <div class="col-md-4 ps-0 mb-3">
                            <label class="form-label">Irányítószám</label>
                            <input id="postcode" type="number" class="form-control shadow-none">
                        </div>
                        <div class="col-md-4 ps-0 mb-3">
                            <label class="form-label">Utca</label>
                            <input id="utca" type="text" class="form-control shadow-none">
                        </div>
                        <div class="col-md-4 ps-0 mb-3">
                            <label class="form-label">Házszám</label>
                            <input id="Hnumber" type="text" class="form-control shadow-none">
                        </div> -->

                    </div>
                </div>

                <div class="text-center my-1">
                <input class="btn btn-dark shadow-none" onclick="newUser()" type="button" value="Regisztráció"></button>


                </div>
                </div>
                </form>

            </div>
            </div>
        </div>
        
</body>
</html>

  <script>
  let user = {
    username: false,
    email: false
  }

  function vrfUsername(obj) {
    console.log('vrfUsername-', obj.value)
    verifyUser('../server/verifyUser.php?username=' + obj.value, renderVryUsername);
  }

  function renderVryUsername(data) {
    console.log(data)
    if (data.nr == 0)
      user.username = true
    else
      user.username = false
  }

  function vrfEmail(obj) {
    console.log(obj.value)
    verifyUser('../server/verifyUser.php?email=' + obj.value, renderVryEmail);
  }

  function renderVryEmail(data) {
    console.log(data)
    if (data.nr == 0)
      user.email = true
    else
      user.email = false
  }
 async function newUser() {
  console.log(user)
    if (user.username && user.email) {
      const myFormData = new FormData(document.querySelector('form'));
      /*for(let obj of myFormData){
        console.log(obj);
      }*/

      let configObj = {
        method: 'POST',
        body: myFormData
      }
      //postData('../server/insertuser.php', configObj, render)

      await $.ajax({
        type: "POST",
        url: '../server/insertuser.php',
        data: myFormData,
        processData: false,
        contentType: false,
        success : function (s) {
            console.log(s)
            //document.getElementById("register-close").click();
            document.getElementById("register-modal-body").innerHTML = "sikeres regisztracio"

            document.getElementById("au-name").innerHTML = `
                <a class='nav-link btn btn-outline-dark my-2 my-sm-0' href='#'>${s}</a>
            `;

            document.getElementById("au-lu").innerHTML = `
                <a class='nav-link btn btn-outline-dark my-2 my-sm-0' href='index.php?prog=logout.php'>Logout</a>
            `;

        }, error : function (e) {
            console.log(e)
        }
    });

    }

    function render(data) {
      console.log("render-data:",data);
      document.querySelector('.msg').innerHTML = data.msg;
      if(data?.id){
        user.username=false
        user.email=false
      }

    }

  }
</script>
