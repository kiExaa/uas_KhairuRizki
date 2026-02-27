<?php 
include_once("../koneksi.php");

if (!isset($_GET['idp'])) {
    die("ID tidak ditemukan");
}

$idhapus = $_GET['idp'];

#2.1
$qry = "SELECT * FROM produk WHERE id='$idhapus'";
$hapus_foto = mysqli_query(mysql: $koneksi,query: $qry);
$data = mysqli_fetch_array(result: $hapus_foto);
$nama_foto = $data['foto'];
$lokasi_foto = "../fotoproduk/$nama_foto";

if(file_exists(filename: $lokasi_foto)){
    unlink(filename: $lokasi_foto);
}

$qry = "DELETE FROM produk WHERE id='$idhapus'";
$hapus = mysqli_query($koneksi, $qry);

if ($hapus) {
    header("Location: index.php");
} else {
    echo "Gagal hapus data: " . mysqli_error($koneksi);
}
?>
