<?php 
include("db.php");

$query = mysqli_query($db, 'SELECT tamu.*,prioritas.keterangan FROM tamu
 JOIN prioritas ON prioritas.id = tamu.id_prioritas');     
while ($data = mysqli_fetch_array($query)) {
    $tamu[] = $data;
};

?>
<html>
    <head><title>Daftar Tamu</title></head>
    <body>
    <table border="1" style="width:100%">
        <tr>
            <td>Nama</td>
            <td>Jenis Kelamin</td>
            <td>Prioritas</td>
            <td>Tujuan</td>
            <td>Keperluan</td>
            <td>Aksi</td>
        </tr>
        <?php 
        foreach ($tamu as $arr) { ?>
        <tr>
            <td><?= $arr ['nama']?></td>
            <td><?= $arr ['jenis_kelamin']?></td>
            <td><?= $arr ['keterangan']?></td>
            <td><?= $arr ['tujuan']?></td>
            <td><?= $arr ['keperluan']?></td>
            <td>
                <a href="proses_hapus.php?id=<?= $arr['id']?>">Hapus</a>
            </td>
        </tr>
        <?php }
    ?>
    </table>
</body>
</html>