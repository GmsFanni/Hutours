<?php
        session_start();
        require_once "configDb.php";

        $v_nev = $_POST["v_nev"];
        $v_email = $_POST["v_email"];
        $v_targy = $_POST["v_targy"];
        $v_szoveg = $_POST["v_szoveg"];

        $sql = "INSERT INTO `velemeny` (`v_nev`, `v_email`, `v_targy`, `v_szoveg`, `v_idopont`) 
                VALUES (:v_nev, :v_email, :v_targy, :v_szoveg, current_timestamp())";

        $stmt = $db->prepare($sql);
        $stmt->bindParam(":v_nev", $v_nev);
        $stmt->bindParam(":v_email", $v_email);
        $stmt->bindParam(":v_targy", $v_targy);
        $stmt->bindParam(":v_szoveg", $v_szoveg);
        $stmt->execute();
/*
        $response = "Sikeres mentés!";
        
        echo $response;*/
?>
 

