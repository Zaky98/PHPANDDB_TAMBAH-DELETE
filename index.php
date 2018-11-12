<?php

    require 'function.php';
    $mahasiswa = query("SELECT * FROM mahasiswa");

?>

<!DOCTYPE html>
<html leng = "en">
<head>
    <title> Document </title>
</head>
<body>
    <h1> Daftar Mahasiswa </h1>
    
    <table border = "1" cellpadding = "10" cellspacing = "0">

    <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Nim</th>
        <th>Email</th>
        <th>Jurusan</th>
        <th>Gambar</th>
        <th>Aksi</th>
    </tr>

    <!-- //kita biat contoh data static -->

    <?php $i=1 ?>
    
    <?php foreach ($mahasiswa as $row): ?>
    <tr>
        <td><?= $i; ?></td>
        <td><?= $row["Nama"];?></td>
        <td><?= $row["Nim"];?></td>
        <td><?= $row["Email"];?></td>
        <td><?= $row["Jurusan"];?></td>
        <td> <img src="img/<?php echo $row["Gambar"]; ?>" alt="" srcset="" width=100 height=50></td>
        <td>
            <a href = ""> Edit </a>
            <a href = "hapus.php?id=<?php echo $row["id"]; ?>">Hapus </a>
        </td>
    </tr>
    <?php $i++ ?>
    <?php endforeach;?>
    </table>
    
    <br>
    <button><a href = "tambah_data.php">  Tambah Data Mahasiswa </a></button>

</body>
</html>