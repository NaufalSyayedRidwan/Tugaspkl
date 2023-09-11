<?php 
include("db.php");

$nama           = $_POST["nama"];
$jenis_kelamin  = $_POST["jenis_kelamin"];
$prioritas      = $_POST["prioritas"];
$tujuan         = $_POST["tujuan"];
$keperluan      = $_POST["keperluan"];

$sql = 
    "INSERT INTO tamu
        (nama, jenis_kelamin, id_prioritas, tujuan, keperluan)
     VALUES
        ('$nama','$jenis_kelamin','$prioritas','$tujuan','$keperluan');
    ";

if($db->query($sql) === TRUE){
    echo "berhasil";
}else{
    echo $db->error;
}

?>