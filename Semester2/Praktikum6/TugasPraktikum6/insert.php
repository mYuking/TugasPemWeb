<?php 

    include 'koneksi.php';
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $rombel = $_POST['rombel'];
    $matkul = $_POST['matkul'];
    $keterangan = $_POST['keterangan'];
    $query = "INSERT INTO kehadiran (nama, nim, rombel, matkul, keterangan)
             VALUES ('$nama', '$nim', '$rombel', '$matkul', '$keterangan') ";

if($conn->query($query) === TRUE){
    header("Location: index.php");
    exit();
} else {
    echo "Error:" . $query . "<br>" . $conn->error;
}

$conn->close();


?>