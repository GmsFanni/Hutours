<?php
session_start();
require_once "configDb.php";
 extract($_SESSION);
 extract($_GET);
 $sql = "INSERT INTO foglalas (uid,idopont_id) VALUES({$uid}, {$id})";
 $stmt=$db->exec($sql);
echo json_encode(["Msg" =>"OK"]);


?>