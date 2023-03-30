<?php
require_once "configDb.php";
$sql= "SELECT H_id, Varosok,city_id FROM helyek ";
$stmt=$db->query($sql);
echo json_encode($stmt->fetchAll());
?>