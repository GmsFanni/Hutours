<?php
session_start();
require_once "configDb.php";
 extract($_SESSION);
 $sql = "SELECT helyek.Varosok AS Város, idopontok.Ido_mikoroda AS Odadatum, idopontok.Ido_oda AS odaora, idopontok.Ido_visszamikor AS visszadatum, idopontok.Ido_vissza AS visszaora 
        FROM foglalas INNER JOIN idopontok ON idopontok.hely_id = foglalas.idopont_id 
        INNER JOIN helyek ON idopontok.hely_id = helyek.H_id WHERE uid={$uid}";
 $stmt=$db->query($sql);
echo json_encode($stmt->fetchAll());


?>