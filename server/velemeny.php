<?php
require_once "configDb.php";
$sql= "";
$stmt=$db->query($sql);
echo json_encode($stmt->fetchAll());
?>

