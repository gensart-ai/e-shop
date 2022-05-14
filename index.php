<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="frameworks/bootstrap5/css/bootstrap.css">
    <title>Gens E-Shop | Login</title>
</head>

<body>
    <div class="m-auto col-6" style="text-align:center;">
        <h1>Welcome to Gens E-Shop Admin !</h1>
        <p> Please login with your administrative privilege to e-shop database.</p>
    </div>
    <form action="admin.php" method="post">
        <div class="mb-3 m-auto col-4" style="text-align:center;">
            <div class="form-text">Powered with PHP Procedural, Bootstrap 5 and MySQL</div>
            <div class="text-danger form-text"><?php if(isset($_GET["redirect"])) {echo $_GET["redirect"];} else {} ?>
            </div>
            <label for="username" class="form-label">Username</label>
            <input type="username" class="form-control" name="username" id="username">
        </div>
        <div class="mb-3 m-auto col-4" style="text-align:center;">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-outline-primary">Submit</button>
        </div>
    </form>
</body>

</html>