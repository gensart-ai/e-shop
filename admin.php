<?php
    require "mysql.php";
    $increment = 1;
    if(!mysqli_connect("localhost",$_POST["username"],$_POST["password"],"stockdb")) {
        header('Location: index.php?redirect=ERROR%20:%20Permission%20denied!');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="frameworks/bootstrap5/css/bootstrap.css">
    <title>Gens E-Shop | Admin</title>
</head>

<body class="text-center">
    <h1 class="m-2 text-center">Welcome, Admin !</h1>
    <p class="m-2 text-center">Specify what you want to in e-shop database :</p>

    <behavior action="" method="post">
        <button class="m-1 btn btn-secondary" id="showButton" onclick="getSubmit();">Show Data</button>
        <button class="m-1 btn btn-primary" onclick="insertMenu">Tambah Data</button>
        <button class="m-1 btn btn-warning">Update Data</button>
        <button class="m-1 btn btn-danger">Delete Data</button>
    </behavior>
    <table class="table" id="table" style="visibility:hidden;">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Jenis Barang</th>
                <th scope="col">Quantity (Qty)</th>
                <th scope="col">Harga Satuan (Rp)</th>
            </tr>
        </thead>
        <?php foreach(query("select * from data_barang") as $res):?>
        <tr>
            <th scope="row"><?= $increment ?></th>
            <td><?= $res["nama_barang"] ?></td>
            <td><?= $res["jenis_barang"] ?></td>
            <td><?= $res["qty"] ?></td>
            <td><?= $res["harga_satuan"] ?></td>
        </tr>
        <?php $increment++;endforeach; ?>
    </table>
    </div>
</body>
<script src="script.js"></script>

</html>