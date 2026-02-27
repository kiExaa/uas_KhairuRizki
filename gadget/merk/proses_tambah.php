<?php
    #1. Meng-koneksikan PHP ke MySQL
    include("../koneksi.php");

    #2. Mengambil Value dari Form Tambah
    $idm = $_POST['idm'];
    $nama_merk = $_POST['nama_merk'];
    $kode_m = $_POST['kode_m'];

    #3. Query Insert (proses tambah data)
    $query = "INSERT INTO merk (kode_m,nama_merk) 
    VALUES ('$kode_m','$nama_merk')";

    $tambah = mysqli_query($koneksi,$query);

    #4. Jika Berhasil triggernya apa? (optional)
    if($tambah){
        header("location:index.php");
        
    }else{
        echo "Data Gagal ditambah";
    }
?>