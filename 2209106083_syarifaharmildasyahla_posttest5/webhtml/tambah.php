<?php
    require "koneksi.php";
        if (isset($_POST['tambah'])) {
            $nama = $_POST['nama'];
            $ukuran = $_POST['ukuran'];
            $jumlah = $_POST['jumlah'];

            $result = mysqli_query($conn, "INSERT INTO pembelian VALUES ('', '$nama', '$ukuran', '$jumlah')");

            if ($result) {
                echo "
                <script>
                    alert('Data berhasil ditambahkan!');
                    document.location.href = 'index.php';
                </script>";
            } else {
                echo "
                <script>
                    alert('Data gagal ditambahkan!');
                    document.location.href = 'index.php';
                </script>";
            }
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="add-data">
        <div class="add-form-container">
            <h1>tambah data</h1><hr><br>
            <form action="" method="post">

                <label for="nama">nama gaun</label>
                <input type="text" name="nama" class="textfield">

                <label for="ukuran">ukuran</label>
                <select class="" name="ukuran">
                    <option value="xs">XS</option>
                    <option value="s">S</option>
                    <option value="m">M</option>
                    <option value="l">L</option>
                    <option value="xl">XL</option>
                </select>

                <label for="jumlah">jumlah</label>
                <select class="" name="jumlah">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>


                <input type="submit" name="tambah" value="Tambah Data" class="login-btn">

            </form>
        </div>
    </section>
</body>
</html>