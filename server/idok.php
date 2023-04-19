<?php
session_start();
require_once "configDb.php";
extract($_GET);

$sql= "SELECT i.id, i.hely_id,i.ido_mikoroda,i.ido_oda,i.ido_vissza,i.ido_visszamikor,h.foto_url,h.Varosok,i.arak FROM idopontok i,helyek h WHERE i.hely_id=h.h_id and  hely_id = {$id}";
$stmt=$db->query($sql);
echo json_encode($stmt->fetchAll());
?>