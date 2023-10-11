<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylelogin.css">
</head>
<body>
    <h1>DATA LOGIN</h1><br>
    
    <?php
    if(isset($_POST["email"])&& isset($_POST["password"])&& isset($_POST["nomorhp"])&& isset($_POST["alamat"])){
        $email = $_POST["email"];
        $password = $_POST["password"];
        $nomorhp = $_POST["nomorhp"];
        $alamat = $_POST["alamat"];
        echo "email : " .$email;
        echo "<br>password : ".$password;
        echo "<br>phone number : ".$nomorhp;
        echo "<br>address : ".$alamat;

        // Menambahkan tombol "Next" untuk mengalihkan ke file HTML
        echo '<form action="webhtml/posttest3.html">
                    <input type="submit" value="Next">
            </form>';
    }
    ?>
</body>
</html>