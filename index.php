<?php
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="frameworks/bootstrap5/css/bootstrap.css">
    <title>Gens E-Shop | Login</title>
</head>
<body style="background-color:indigo;color:white;text-align:center;">
    <header>
        <h1>Welcome to Gens E-Shop Admin !</h1>
        <p> Please login with your administrative privilege to e-shop database.</p>
    </header>
    <form action="admin.php" method="post">
        <label for="username">Username</label>
        <input type="username" name="username" id="username" placeholder="Username">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Password">
        <br>
        <input type="submit" class="btn-primary" name="submit">
    </form>
</body>
</html>