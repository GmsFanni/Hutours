<?php
  session_start();
  ///print_r($_SESSION);
  
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="utils.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    
    <title>HUTOURS</title>
</head>

<body class="bg-light">
        <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">HUTOURS</a>
                <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item me-2">
                    <a class="nav-link" href="index.php?prog=jaratok.php">Járataink</a>
                    </li>
                    <li class="nav-item me-2">
                    <a class="nav-link" href="index.php?prog=idojarasok.php">Időjárás</a>
                    </li>
                    <li class="nav-item me-2">
                    <a class="nav-link" href="index.php?prog=elerhetoseg.php">Elérhetőség</a>
                    </li>
                    <li class="nav-item me-2">
                    <a class="nav-link" href="index.php?prog=rolunk.php">Rólunk</a>
                    </li>
                </ul>
                
                
                      <?php
                      if(isset($_SESSION['username'])){
                        echo "
                          <div class='d-flex'>
                            <a class='btn btn-outline-dark shadow-none me-lg-3 me-2' href='index.php?prog=userfelulet.php'>{$_SESSION['username']}</a>
                          </div>
                          <div class='d-flex'>
                            <a class='btn btn-outline-dark shadow-none' href='index.php?prog=logout.php'>Logout</a>
                          </div>
                        ";
                      }else{
                        echo '
                          <div class="d-flex" id="au-name">
                            <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">Bejelentkezés</button>
                          </div>
                          <div class="d-flex" id="au-lu">
                            <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">Regisztráció</button>
                          </div>
                        ';
                      }
                      ?>

    
                
            </div>
            </div>
        </nav>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<div class="container">
  <?php
    //print_r($_GET);
    extract($_GET);
    if(isset($prog))
        include $prog;
    else
      include 'fooldal.php';
  ?>

</div>



        <?php require('register.php'); ?>
        <?php require('login.php'); ?>
        
                    

</body>
</html>

<?php require('labjegyzet.php'); ?>


