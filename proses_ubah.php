<?php 

include("db.php");

$nama           = $_POST["nama___"];
$jenis_kelamin  = $_POST["jenis_kelamin"];
$prioritas      = $_POST["prioritas"];
$tujuan         = $_POST["tujuan"];
$keperluan      = $_POST["keperluan"];

$sql = "";

if($db->query($sql) === TRUE){
    echo "";
}else{
    echo $db->error;
}

?>