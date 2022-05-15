<?php
    require 'mysql.php';
    if($_POST["behavior"] = "insert") :
        $nama_barang = htmlspecialchars($_POST["nama_barang"]);
        $jenis_barang = htmlspecialchars($_POST["jenis_barang"]);
        $qty = htmlspecialchars($_POST["qty"]);
        $harga_satuan = htmlspecialchars($_POST["harga_satuan"]);
        $sql = "INSERT INTO data_barang(nama_barang, jenis_barang, qty, harga_satuan ) 
                VALUES ('$nama_barang', '$jenis_barang', '$qty', '$harga_satuan')";
        if(insertData($sql) > 0) { ?>
            <div class="alert alert-success" role="alert">
                Success !. Data has been inserted to database.
                <button class="btn btn-success m-2" onclick="movePage('admin.php');">OK</button>
            </div>
            <?php
        } else { ?>
            <div class="alert alert-danger" role="alert">
                Failed !. Data did not sent to database.
            </div>
<?php   }
    endif; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="frameworks/bootstrap5/css/bootstrap.css">
    <title>Gens E-Shop | Results</title>
</head>

<body>

</body>
<script src="script.js"></script>
</html>