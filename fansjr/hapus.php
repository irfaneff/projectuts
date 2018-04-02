<?php

include "koneksi.php";
$koneksiObj=new Koneksi();
$koneksi= $koneksiObj->ambilKoneksi();

if($koneksi->connect_error) {
	die("Maap-maap nich, Konesi Gagal : " . $koneksi->connect_error);
}else{
	echo "Koneksi ke basis data sukses!";
}



$query = "delete from mahasiswa where NIM = " . 
        $_GET["NIM"];
        
//echo $query

if($koneksi->query($query)==true){
    echo "<br>Data dengan NIM " . $_GET["NIM"] . 
    " sudah terhapus ye. Data bisa dilihat " . 
    '<a href="main.php">disini</a>';
}else {
    echo "error : ".$query." -> ".$koneksi->error;
}

$koneksi->close();
?>