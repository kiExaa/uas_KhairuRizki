<?php
    #1. Meng-koneksikan PHP ke MySQL
    include("../koneksi.php");

    #2. Mengambil Value dari Form Tambah
    $id = $_POST['id'];
    $idk = $_POST['idk'];
    $idm = $_POST['idm'];
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $merk = $_POST['merk'];
    $kategori = $_POST['kategori'];
    $nama_foto = $_FILES['foto']['name'];
    $tmp_foto = $_FILES['foto']['tmp_name'];
    
    

    if($nama_foto !=""){
        $qry = "SELECT * FROM produk WHERE id='$id'";
        $hapus_foto = mysqli_query($koneksi,query: $qry);
        $data = mysqli_fetch_array($hapus_foto);
        $nama_foto_hapus = $data['foto'];
        $lokasi_foto = "../fotoporduk/$nama_foto_hapus";
        if(file_exists($lokasi_foto)){
          unlink($lokasi_foto);
        }


        $query = "UPDATE e_gadget SET idk='$idk', idm='$idm', 
        nama_produk='$nama_produk', harga='$harga', stok='$stok', merk_id='$merk',  kategori_id='$kategori'
        WHERE id='$idp'";

    

     #hapusfoto
    //  $lokasi_foto = "../fotosiswa/$nama_foto";
    //  if(file_exists($lokasi_foto)){
    //     unlink($lokasi_foto);
    // }

    move_uploaded_file($tmp_foto,"../fotoproduk/$nama_foto");


    }else{
    #3. Query Insert (proses tambah data)
    $query = "UPDATE produk SET idk='$idk', idm='$idm', nama_produk='$nama_produk', 
    harga='$harga', stok='$stok',merk_id='$merk',  kategori_id='$kategori' 
    WHERE id='$idp'";
    }

   
    $tambah = mysqli_query($koneksi,$query);
    // $lokasi_foto = "./fotosiswa/$nama_foto";



    #4. Jika Berhasil triggernya apa? (optional)
    if($tambah){
        header("location:index.php");
    }else{
        echo "Data Gagal ditambah";
    }
?>