<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="frameworks/bootstrap5/css/bootstrap.css">
    <title>Gens E-Shop | Insert Data</title>
</head>

<body>
    <h1 class="text-center mt-3">Insert Data to Database</h1>
    <div class="form-text text-black text-center">Masukkan data produk ke database.</div>
    <form action="result.php" method="post" class="col-6 m-auto">
        <div class="row g-3 mt-2 mb-2 align-items-center">
            <div class="col-auto">
                <label for="nama_barang" class="col-form-label">Nama Barang</label>
            </div>
            <div class="col-auto">
                <input type="text" id="nama_barang" name="nama_barang" class="form-control" required>
                <div class="invalid-feedback">Harap masukkan nama barang !</div>
            </div>
            <div class="col-auto">
                <span id="nama_barang" class="form-text">
                    masukkan nama produk.
                </span>
            </div>
        </div>
        <div class="row g-3 mt-2 mb-2 align-items-center">
            <select class="form-select" name="jenis_barang" required>
                <option selected>Pilih jenis produk</option>
                <option value="Sayur">Sayur</option>
                <option value="Buah - Buahan">Buah - Buahan</option>
                <option value="Biji - Bijian">Biji - Bijian</option>
                <option value="Bumbu Dapur">Bumbu Dapur</option>
                <option value="Bahan Baku">Bahan Baku</option>
                <option value="Cemilan">Cemilan</option>
                <option value="Makanan Siap Saji">Makanan Siap Saji</option>
                <option value="Lainnya">Lainnya</option>
            </select>
        </div>
        <div class="row g-3 mt-2 mb-2 align-items-center">
            <div class="col-auto">
                <label for="qty" class="col-form-label">Quantity (Qty)</label>
            </div>
            <div class="col-auto">
                <input type="number" id="qty" name="qty" class="form-control" required>
            </div>
            <div class="col-auto">
                <span id="qty" class="form-text">
                    masukkan jumlah ketersediaan dari produk.
                </span>
            </div>
        </div>
        <div class="row g-3 mt-2 mb-2 align-items-center">
            <div class="col-auto">
                <label for="harga_satuan" class="col-form-label">Harga Barang</label>
            </div>
            <div class="col-auto">
                <input type="number" id="harga_satuan" name="harga_satuan" class="form-control" required>
            </div>
            <div class="col-auto">
                <span id="harga_satuan" class="form-text">
                    masukkan harga satuan dari produk.
                </span>
            </div>
        </div>
        <button type="submit" name="behavior" value="insert" class="btn btn-sm btn-primary mt-2">Insert Data</button>
        <button type="button" class="btn btn-sm btn-danger mt-2" onclick="backToDashboard();">Cancel</button>
    </form>
</body>
<script src="script.js"></script>
</html>