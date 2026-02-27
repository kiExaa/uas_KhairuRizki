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
    include_once("../navbar.php");
    ?>

    <div class="container">
        <div class="row my-5">
            <div class="col-8 m-auto">
                <div class="card shadow p-3 mb-5 bg-body-tertiary rounded">
                    <div class="card-header">
                        <b>FORM Produk</b>
                    </div>
                    <div class="card-body">
                        <form action="proses_tambah.php" method="POST" enctype="multipart/form-data">
                            <!-- idk dan idm dihapus, cukup kategori dan merk relasi -->
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
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="kategori" class="form-label">Kategori</label>
                                    <select class="form-control" name="kategori" id="kategori">
                                        <option value="">-Pilih Kategori-</option>
                                        <?php 
                                            include_once('../koneksi.php');
                                            $qry_kategori = "SELECT * FROM kategori";
                                            $data_kategori = mysqli_query($koneksi,$qry_kategori);
                                            foreach($data_kategori as $item_kategori){
                                        ?>
                                        <option value="<?=$item_kategori['id']?>"><?=$item_kategori['kode_k']?> - <?=$item_kategori['nama_kategori']?></option>
                                        <?php }
                                        ?>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="merk" class="form-label">Merk</label>
                                    <select class="form-control" name="merk" id="merk">
                                        <option value="">-Pilih Merk-</option>
                                        <?php 
                                            include_once('../koneksi.php');
                                            $qry_merk = "SELECT * FROM merk";
                                            $data_merk = mysqli_query($koneksi,$qry_merk);
                                            foreach($data_merk as $item_merk){
                                        ?>
                                        <option value="<?=$item_merk['id']?>"><?=$item_merk['kode_m']?> - <?=$item_merk['nama_merk']?></option>
                                        <?php }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Foto</label>
                                <input name="foto" accept="image/*" type="file" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
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