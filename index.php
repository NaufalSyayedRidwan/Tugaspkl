<?php 
include("db.php");

$query = mysqli_query($db, 'SELECT * FROM prioritas');     
while ($data = mysqli_fetch_array($query)) {
    $prioritas[] = $data;
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
</head>
<body>

<table style="width:100%" border = 1>
    <tr>
        <td colspan="3" style="text-align:center">
    <h3>
        BUKU TAMU
    </h3>
</td>
    </tr>
    <tr>
        <td style="width:20%" ></td>
        <td>

            <form action="proses_insert.php" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" class="form-control"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jenis_kelamin" value="L" id=""> Laki - Laki
                        <input type="radio" name="jenis_kelamin" value="P" id=""> Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Tujuan</td>
                    <td>:</td>
                    <td><input type="text" name="tujuan" class="form-control"></td>
                </tr>
                <tr>
                    <td>Prioritas</td>
                    <td>:</td>
                    <td>
                        <select name="prioritas" id="">

    <?php 
        foreach ($prioritas as $arr) {
            echo "<option value='".$arr['id']."'>".$arr['keterangan']."</option>";
        }
    ?>

                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Keperluan</td>
                    <td>:</td>
                    <td>
                        <textarea name="keperluan" id="" cols="30" rows="10"></textarea>
                    </td>
                </tr>
            </table>

            <center>
            <input type="submit" value="SIMPAN">
            </center>
            </form>
        </td>
        <td style="width:20%"></td>
    </tr>
</table>
    
</body>
</html>