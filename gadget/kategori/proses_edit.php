<?php
    #1. Meng-koneksikan PHP ke MySQL
    include("../koneksi.php");

    #2. Mengambil Value dari Form Tambah
    $idm = $_POST['id'];
    $kode = $_POST['kode_k'];
    $nama_kategori = $_POST['nama_kategori'];

    
    #3. Query Update (proses edit data)
    $query = "UPDATE kategori SET nama_kategori='$nama_kategori', kode='$kode'
    WHERE id='$id'";
    
    $tambah = mysqli_query($koneksi,$query);

    #4. Jika Berhasil triggernya apa? (optional)
    if($tambah){
        header("location:index.php");
    }else{
        echo "Data Gagal ditambah";
    }
?>