<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <title>Bejelentkezés</title>
</head>
<body>
    
<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <form id="login-form">
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center"><i class="bi bi-box-arrow-in-right fs-3 me-2"></i>Bejelentkezés</h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    
                
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="username" name="username" class="form-control shadow-none">
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Jelszó</label>
                        <input type="password" name="password" class="form-control shadow-none">
                    </div>
                    
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <!--<button type="submit" class="btn btn-dark shadow-none">LOGIN</button> -->
                        <input class="btn btn-dark shadow-none" type="button" onclick="loginUser()" value="Sign in" />
                        <a href="javascript: void(0)" class="text-secondary text-decoration-none">Elfelejtett jelszó</a>
                    </div>
                </div>
                </form>

            </div>
            </div>
        </div>
</body>
</html>

<script>

  function loginUser() {
    console.log("client.login")
      const myFormData = new FormData(document.getElementById('login-form'));
      let configObj = {
        method: 'POST',
        body: myFormData
      }
      postData('../server/login.php', configObj, render)
    }
  
  function render(data){
    console.log(data)
    if(data.msg=='ok')
      location.href='./felh.php'//átirányítás
  }
  
</script>