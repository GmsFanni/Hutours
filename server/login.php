<?php
    session_start();
    require_once 'configDb.php';
    extract($_POST);

    //die(json_encode(["msg"=>print_r($_POST)]));

    $sql="SELECT id, PASSWORD pwCrypted from users where username='{$username}'";
    try{
        $stmt=$db->query($sql);
        if($stmt->rowCount()==1){
            $row=$stmt->fetch();
            extract($row);
            $isValid=password_verify($password,$pwCrypted);
            if($isValid){
                $_SESSION['username']=$username;
                $_SESSION['uid']=$id;
                echo json_encode(["msg"=>"ok"]);
            }else
                echo json_encode(["msg"=>"Hibás Felhasználónév/jelszó páros!"]);
        }else
            echo json_encode(["msg"=>"Hibás Felhasználónév!"]);
    }catch(exception $e){
        echo json_encode(["msg"=>"Sikertelen regisztáció! {$e}"]);
    }
?>