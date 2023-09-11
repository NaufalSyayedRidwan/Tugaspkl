<?php

include("db.php");

$id = $_GET['id'];
$sql = "DELETE FROM buku_tamu WHERE id = $id";

if ($db->query($sql)) {
    header('location:tamu.php');
}else{
    echo"GAGAL";

}

?>