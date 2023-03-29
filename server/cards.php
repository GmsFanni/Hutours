<?php
        require_once "configDb.php";
        $sql= "SELECT card_id, card_img, card_cim, card_ar, card_arban, card_reszlet, ertekeles FROM `cards` WHERE 1";
        $stmt=$db->query($sql);
        echo json_encode($stmt->fetchAll());
?>