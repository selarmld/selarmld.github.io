<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class='table'>
        <main>
            <form method="POST" action="login.php">
                <h1>FORM LOGIN</h1>

                <div class="email">
                    email : <br><input type="text" name = "email" id ="email">
                </div>
            
                <div class="password">
                    password : <br><input type="password" name = "password" id ="password">
                </div>

                <div class="nomorhp">
                    phone number : <br><input type="varchar" name = "nomorhp" id ="nomorhp">
                </div>

                <div class="alamat">
                    address : <br><input type="text" name = "alamat" id ="alamat">
                </div>

                <div>
                    <input type="submit" value="submit">
                </div>
            </form>
        </main>
    </div>
</body>

</html>