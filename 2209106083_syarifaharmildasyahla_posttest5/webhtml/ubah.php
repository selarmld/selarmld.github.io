<?php
require "koneksi.php";
    $id = $_GET["id"];

    $result = mysqli_query($conn, "select * from pembelian where id = '$id'");

    $pembelian = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $pembelian[] = $row;
    }

    $pembelian = $pembelian[0];

    if (isset($_POST["ubah"])) {
        $nama = $_POST['nama'];
        $ukuran = $_POST['ukuran'];
        $jumlah = $_POST['jumlah'];

        $result = mysqli_query($conn, "update pembelian set nama = '$nama', ukuran = '$ukuran', jumlah = '$jumlah' where id = '$id'");

        if ($result) {
            echo "
                    <script>
                        alert('Data Berhasil Diubah!');
                        document.location.href = 'index.php';
                    </script>
                ";
        } else {
            echo "
                <script>
                    alert('Data Gagal Diubah!');
                </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tambah Data</title>
</head>

<body>
    <section class="add-data">
            <div class="add-form-container">
                <h1>ubah data</h1><hr><br>
                <form action="" method="post">

                    <label for="nama">nama gaun</label>
                    <input type="text" name="nama" class="textfield" value="<?=$pembelian["nama"]?>">

                    <label for="ukuran">ukuran</label>
                    <select class="" name="ukuran" value="<?=$pembelian["ukuran"]?>">
                        <option value="xs">XS</option>
                        <option value="s">S</option>
                        <option value="m">M</option>
                        <option value="l">L</option>
                        <option value="xl">XL</option>
                    </select>

                    <label for="jumlah">jumlah</label>
                    <select class="" name="jumlah" value="<?=$pembelian["jumlah"]?>">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>


                    <button type="submit" name="ubah">Ubah</button>

                </form>
            </div>
    </section>

</body>

</html>