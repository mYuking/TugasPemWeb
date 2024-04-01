<?php

    include 'koneksi.php';

    // show data 
    $query = "SELECT * FROM kehadiran";
    $result = $conn->query($query);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Kehadiran</h1>
    <table border="1" style="width:100%">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Rombel</th>
            <th>Matkul</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>

        
<?php while($row = $result->fetch_assoc()) : ?>


        <tr>
            <td> <?= $row['no']?>    </td>
            <td> <?= $row['nama'] ?>   </td>
            <td> <?= $row['nim'] ?>   </td>
            <td> <?= $row['rombel'] ?>   </td>
            <td> <?= $row['matkul'] ?>   </td>
            <td> <?= $row['keterangan'] ?>   </td>
            <td>
                <a href="edit.php?id=; ?>">Edit</a>
                <a href="delete.php?id=; ?>">Delete</a>
            </td>
        </tr>
<?php endwhile; ?>
    </table>

    <br>
    <h2>Input Kehadiran</h2>
    <form action="insert.php" method="POST">
        Nama: <input type="text" name="nama" required><br>
        Nim: <input type="text"  name="nim" required><br>
        Rombel: <input type="text" name="rombel" required><br>
        Matkul: <input type="text" name="matkul" required><br>
        Keterangan: <input type="text" name="keterangan" required><br>
        <input type="submit" value="Tambah">
    </form>
    
</body>
</html>