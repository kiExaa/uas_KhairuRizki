<?php 
include_once("../koneksi.php");


if (!isset($_GET['id'])) {
    die("ID tidak ditemukan");
}

$idhapus = $_GET['id'];

#2.1

$qry = "SELECT * FROM produk WHERE id='$idhapus'";
$hapus_foto = mysqli_query($koneksi, $qry);
$data = mysqli_fetch_array($hapus_foto);
$nama_foto = $data['foto'];
$lokasi_foto = "../fotoproduk/$nama_foto";

if($nama_foto && file_exists($lokasi_foto)){
    unlink($lokasi_foto);
}

$qry = "DELETE FROM produk WHERE id='$idhapus'";
$hapus = mysqli_query($koneksi, $qry);

if ($hapus) {
    header("Location: index.php");
} else {
    echo "Gagal hapus data: " . mysqli_error($koneksi);
}
?>
