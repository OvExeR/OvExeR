<!-- Mengcek apakah tombol submit sudah ditekan -->
<?php
    if( isset( $_POST["submit"] ) ){
        // Cek apakah username dan password benar
        if( $_POST["username"] == "admin" && $_POST["password"] == "admin123" ) {
            // jika benar, redirect kehalaman admin
            header("Location: admin.php");
            exit;
        }else{
            // Jika Salah
            $error = true;
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
</head>
<body>
<?php if( isset( $error ) ) :?>
<p style="color : red; font-style : italic;" >Username atau Password Salah!</p>
<?php endif; ?>
<ul>
    <form action="" method="post" >
    <li>
    <label for="username"> Username : </label>
    <input type="text" name="username" id="username">
    </li>

    <li>
    <label for="password"> Password :  </label>
    <input type="password" name="password" id="password" >
    </li>
    <button type="submit" name="submit" > Login </button>

    </form>
</ul>
</body>
</html>