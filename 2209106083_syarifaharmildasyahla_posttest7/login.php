<?php
    session_start();
    require "koneksi.php";

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);

            if(password_verify($password, $row['password'])){
                header('location: index.php');
                exit;
            } else{
                echo "
                <script>
                alert('username atau password salah');
                document.location.href = 'regis.php';
            </script>
            ";
            }
        } else{
            $error = true;
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="styleregis.css">

</head>

<body>
    <div class='table'>
        <main>
            <form action="" method="post">
                <h1>LOGIN</h1>
                
                    <?php
                        if (isset($error)){
                            echo "<p style='color: red;'> username/password salah </p>";
                        } else {
                            
                        }
                    ?>

                <label for=">username">username</label><br>
                <input type="text" name="username" id="username"><br>

                <label for=">password">password</label><br>
                <input type="password" name="password" id="password"><br>

                <input type="submit" name="login" id=""><br>

                <div class="secondary-btn">
                    <button class="back-btn"><a href="posttest.html">kembali</a></button>
                </div><br>
                
            </form>
        </div>
    <a href="logout."></a>
</body>
</html>