<?php
include_once("../koneksi.php");
$idedit = $_GET['id'];
$qry = "SELECT * FROM produk WHERE id='$idedit'";
$edit = mysqli_query($koneksi,$qry);
$data = mysqli_fetch_array($edit);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body style="background-color:#d1e6d4">
    <?php
    include("../ceklogin.php");
    ?>
    <?php
    include_once("../navbar.php");
    ?>

    <div class="container">
        <div class="row my-5">
            <div class="col-8 m-auto">
                <div class="card shadow p-3 mb-5 bg-body-tertiary rounded">
                    <div class="card-header">
                        <b>FORM EDIT BIODATA SISWA</b>
                    </div>
                    <div class="card-body">
                        <form action="proses_tambah.php" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">idk</label>
                                <input name="idk" type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Idm</label>
                                <input name="idm" type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Produk</label>
                                <input name="nama_produk" type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Harga</label>
                                <input name="harga" type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">stok</label>
                                <input name="stok" type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            
                            <!-- <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jns_kelamin"
                                        id="inlineRadio1" value="Laki-laki">
                                    <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jns_kelamin"
                                        id="inlineRadio2" value="Perempuan">
                                    <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                </div>
                            </div> -->
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">id dan kategori</label>
                                <select class="form-control" name="kategori" id="">
                                    <option value="">-Pilih Kategori-</option>
                                    <!-- <option value="IPA">IPA</option> -->
                                   <?php 
                                        //kode untuk looping datat jurusan
                                        include_once('../koneksi.php');
                                        $qry_kategori = "SELECT * FROM kategori";
                                        $data_kategori = mysqli_query($koneksi,$qry_kategori);
                                        foreach($data_kategori as $item_kategori){
                                    ?>
                                    <option value="<?=$item_kategori['id']?>"><?=$item_kategori['kode_k']?>  -  <?=$item_kategori['nama_kategori']?></option>

                                    <!-- <option value="<?=$item_pendaftaran['id']?>"><?=$item_pendaftaran['gelombang']?></option> -->
                                    <?php
                                        //penutup kode looping jurusan
                                        }
                                    ?>
                                </select>
                            </div> 
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Merk</label>
                                <select class="form-control" name="merk" id="">
                                    <option value="">-Pilih Merk-</option>
                                    <!-- <option value="IPA">IPA</option> -->
                                   <?php 
                                        //kode untuk looping datat jurusan
                                        include_once('../koneksi.php');
                                        $qry_merk = "SELECT * FROM merk";
                                        $data_merk = mysqli_query($koneksi,$qry_merk);
                                        foreach($data_merk as $item_merk){
                                    ?>
                                    <option value="<?=$item_merk['id']?>"><?=$item_merk['kode_m']?> - <?=$item_merk['nama_merk']?></option>
                                    <?php
                                        //penutup kode looping jurusan
                                        }
                                    ?>
                                </select>

                                <!-- <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Pendaftaran</label>
                                <input name="alamat" type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div> -->
                            
                            
                        
                    </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Foto</label>
                                <input name="foto" type="file" accept="image/*" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                                    <div id="emailHelp" class= "form-text">Abaikan Jika Foto Tidak Di Ubah</div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>