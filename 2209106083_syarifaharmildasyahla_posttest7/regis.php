<?php
    require "koneksi.php";

    if(isset($_POST['regis'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

        if(mysqli_fetch_assoc($result)){
            echo "
            <script>
                alert('username sudah digunakan');
                document.location.href = 'regis.php';
            </script>
            ";
        } else{
            if($password === $cpassword){
                $password = password_hash($password, PASSWORD_DEFAULT);
    
                $result = mysqli_query($conn, "INSERT into users values('', '$username', '$password')");
                if(mysqli_affected_rows($conn) > 0 ){
                    echo "
                    <script>
                        alert('registrasi sukses');
                        document.location.href = 'login.php';
                    </script>
                    ";
            } else{
                echo "
                <script>
                    alert('konfirmasi password tdk sesuai');
                    document.location.href = 'regis.php';
                </script>   
                ";
            }
        }

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registrasi</title>
    <link rel="stylesheet" href="styleregis.css">
</head>

<body>
    <div class='table'>
        <main>
            <form action="" method="post">
                <h1>registrasi</h1>

                <label for=">username">username</label><br>
                <input type="text" name="username" id="username"><br>

                <label for=">password">password</label><br>
                <input type="password" name="password" id="password"><br>

                <label for=">konfirmasi">konfirmasi</label><br>
                <input type="password" name="cpassword" id="cpassword"><br>

                <input type="submit" name="regis" id=""><br>

                <p>sudah punya akun? <a href="login.php">login</a></p>

                <div class="secondary-btn">
                    <button class="back-btn"><a href="posttest.html">kembali</a></button>
                </div><br>
                
            </form>
        </div>
</body>

</html>