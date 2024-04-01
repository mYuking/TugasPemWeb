<?php 

    include 'koneksi.php';
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $matkul = $_POST['matkul'];
    $semester = $_POST['semester'];

    $query = "INSERT INTO mahasiswa (nama, nim, jurusan, matkul, semester)
             VALUES ('$nama', '$nim', '$jurusan', '$matkul' '$semester') ";

if($conn->query($query) === TRUE){
    header("Location: index.php");
} else {
    echo "EROR:" . $query . "<br>" . $conn->eror;
}

$conn->close();


?>