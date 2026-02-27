<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jurusan Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body style="background-color:#d1e6d4">
    <?php
    include_once("../navbar.php");
    include("../ceklogin.php");
    ?>

    <div class="container">
        <div class="row my-5">
            <div class="col-8 m-auto">
                <div class="card shadow p-3 mb-5 bg-body-tertiary rounded">
                    <div class="card-header">
                        <b>Form Kategori</b>
                    </div>
                    <div class="card-body">
                        <form action="proses_tambah.php" method="POST" enctype="multipart/form-data">
                            
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Kategori</label>
                                <select class="form-control" name="nama_kategori" id="">
                                    <option value="">-Pilih Kategori-</option>
                                    <option value="Smartphone">Smartphone</option>
                                    <option value="Laptop">Laptop</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Kode</label>
                                <select class="form-control" name="kode_k" id="">
                                    <option value="">-Pilih id-</option>
                                    <option value="K01">K01</option>
                                    <option value="K02">K02</option>
                                </select>
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