<?php

include "koneksi.php";
$koneksiObj = new koneksi();
$koneksi = $koneksiObj->ambilKoneksi();

if($koneksi->connect_error) {
    die("koneksi gagal : " . $koneksi->connect_error);
} else {
    echo "koneksi ke basis data SUKSES";
}


$query = "INSERT INTO mahasiswa(NIM,NAMA,JURUSAN) VALUES(".$_POST["NIM"].",'".$_POST["NAMA"]."','".$_POST["JURUSAN"]."') ";

if($koneksi->query($query)==true){
    echo "<br>Data".$_POST["NAMA"].
    " sudah tersimpan. Data bisa dilihat ".
    '<a href="main.php">disini</a>';
}else{
    echo "error : " . $query." -> " . $koneksi->error;
}

$koneksi->close();
?>