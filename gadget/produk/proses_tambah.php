
<?php
#1. Koneksi ke MySQL
include("../koneksi.php");


#2. Ambil value dari form tambah
$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$merk = $_POST['merk']; // ini id dari tabel merk
$kategori = $_POST['kategori']; // ini id dari tabel kategori
$nama_foto = $_FILES['foto']['name'];
$tmp_foto = $_FILES['foto']['tmp_name'];

    #3. Upload foto jika ada
    if($nama_foto != ""){
        $folder = "../fotoproduk/";
        if(!is_dir($folder)){
            mkdir($folder, 0777, true);
        }
        move_uploaded_file($tmp_foto, $folder.$nama_foto);
        $foto_db = $nama_foto;
    }else{
        $foto_db = "";
    }

    #4. Query Insert (proses tambah data)
    $query = "INSERT INTO produk (nama_produk, harga, stok, merk_id, kategori_id, foto) VALUES ('$nama_produk', '$harga', '$stok', '$merk', '$kategori', '$foto_db')";

    $tambah = mysqli_query($koneksi, $query);

    #5. Jika Berhasil
    if($tambah){
        header("location:index.php");
    }else{
        echo "Data Gagal ditambah: ".mysqli_error($koneksi);
    }
    ?>