<?php
require_once "configDb.php";
$sql= "INSERT INTO `velemeny` (`v_id`, `v_nev`, `v_email`, `v_targy`, `v_szoveg`, `v_idopont`) 
VALUES ('1', 'kkopoi', 'uioitgoliuol', 'utikukt', 'uikuikui', current_timestamp());";
$stmt=$db->query($sql);
echo json_encode($stmt->fetchAll());
?>

