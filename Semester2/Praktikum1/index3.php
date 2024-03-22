<?php

    $title = 'Data Mahasiswa';

    $mahasiswa = array(
        array(
            'name' => 'John Doe',
            'jurusan' => 'Teknik Informatika',
            'rombel' => 'TI01'
        ),
        array(
            'name' => 'Jane Doe',
            'jurusan' => 'Sistem Informasi',
            'rombel' => 'SI02'
        ),
        array(
            'name' => 'Alice Smith',
            'jurusan' => 'Teknik Komputer',
            'rombel' => 'TK03'
        ),
        array(
            'name' => 'Bob Johnson',
            'jurusan' => 'Manajemen Informatika',
            'rombel' => 'MI04'
        ),
        array(
            'name' => 'Eva Green',
            'jurusan' => 'Sistem Informasi',
            'rombel' => 'SI05'
        )
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center">  <?php  echo $title ?>  </h1>

    <table style="width: 50%" border="1">
        <tbody>
            <tr>
                <td>Nama Mahasiswa</td>
                <td>Jurusan</td>
                <td>Rombel</td>
            </tr>


            <?php  foreach($mahasiswa as $mhs): ?>

            <tr>
                <td>  <?=  $mhs['name'] ?>  </td>
                <td>  <?=  $mhs['jurusan']  ?> </td>
                <td> <?=  $mhs['rombel'] ?>  </td>
            </tr>
                
            <?php endforeach ; ?>

        </tbody>
    </table>


</body>
</html>