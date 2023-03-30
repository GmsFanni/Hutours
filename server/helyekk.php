<?php
require_once "configDb.php";
$sql= "SELECT H_id, Varosok,cities_id FROM helyek ";
$stmt=$db->query($sql);
echo json_encode($stmt->fetchAll());
?>