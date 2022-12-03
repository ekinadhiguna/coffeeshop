<!DOCTYPE html>
<html>
<head>
    <title>Login Sans Coffee</title>
    <link rel="stylesheet" type="text/css" href="stylelogin.css">
</head>
<body>

<?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan']=="gagal"){
        echo "<div class='alert'>Username dan Password Salah !</div>";
    }
    }
?>

    <div class="panel_login">
        <h2 class="tulisan_atas">Login</h2>
    <form action="cek_login.php" method="post">
        <label>Username</label>
        <input type="text" name="username" class="form_login" placeholder="Username" required="required">
        <label>Password</label>
        <input type="password" name="password" class="form_login" placeholder="Password" required="required">
        <button type="submit" class="tombol_login">LOGIN</button>
    <br/>
    <br/>
    </form>
    </div>
</body>
</html>