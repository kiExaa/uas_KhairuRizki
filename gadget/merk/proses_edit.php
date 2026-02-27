<?php
    #1. Meng-koneksikan PHP ke MySQL
    include("../koneksi.php");

    #2. Mengambil Value dari Form Tambah
    $idm = $_POST['idm'];
    $kode_m = $_POST['kode_m'];
    $nama_merk = $_POST['nama_merk'];

    
    #3. Query Update (proses edit data)
    $query = "UPDATE merk SET nama_merk='$nama_merk', kode_m='$kode_m'
    WHERE id='$id'";
    
    $tambah = mysqli_query($koneksi,$query);

    #4. Jika Berhasil triggernya apa? (optional)
    if($tambah){
        header("location:index.php");
    }else{
        echo "Data Gagal ditambah";
    }
?>