<?php
#1 Meng-koneksikan PHP ke MYSQL
include("../koneksi.php"); 

#2 Mengambil value dari form tambah
$idk = $_POST['idk'];
$idm = $_POST['idm'];
$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$merk = $_POST['merk'];
$kategori = $_POST['kategori'];
$nama_foto = $_FILES['foto']['name'];
$tmp_foto = $_FILES['foto']['tmp_name'];

#3 Query Insert(proses tambah data)
$query = "INSERT INTO produk (idk,idm,nama_produk,harga,stok,email,jns_kelamin,merks_id,ketegoris_id,foto) 
VALUES ('$idk', '$idm', '$nama_produk', '$harga', '$stok','$kategori','$merk','$nama_foto')";

move_uploaded_file($tmp_foto, "../fotoproduk/" . $nama_foto);

$tambah = mysqli_query($koneksi, $query);

#4 Jika berhasil triggernya apa?
if($tambah){
    header("location:index.php");
}else{
    echo "Data gagal ditambah";
}
?> 