<?php
    require "koneksi.php";
        if (isset($_POST['tambah'])) {
            $nama = $_POST['nama'];
            $ukuran = $_POST['ukuran'];
            $jumlah = $_POST['jumlah'];
            $date = date("Y-m-d");

            // uplod
            $gambar = $_FILES['gambar']['name'];
            $explode = explode('.', $gambar); // buat misahin
            $ekstensi = strtolower(end($explode));
            $gambar_baru = "$date.$nama.$ekstensi";
            $tmp = $_FILES['gambar']['tmp_name'];

            if (move_uploaded_file($tmp, 'img/'.$gambar_baru)){
                $result = mysqli_query($conn, "insert into pembelian 
                (id, nama, ukuran, jumlah, gambar) 
                values ('', '$nama', '$ukuran', '$jumlah', '$gambar_baru')");

                if ($result) {
                    echo "
                            <script>
                                alert('Data Berhasil Ditambahkan!');
                                document.location.href = 'index.php';
                            </script>
                        ";
                } else {
                    echo error_log($result)."
                        <script>
                            alert('Data Gagal Ditambahkan!');
                            document.location.href = 'tambah.php';
                        </script>
                    ";
                }
            }else {
                echo "
                <script>
                alert('Gagal Upload Gambar!');
                document.location.href = 'index.php';
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
    <title>Tambah Data</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="add-data">
        <div class="add-form-container">
            <h1>tambah data</h1><hr><br>
            <form action="" method="post" enctype="multipart/form-data">

                <label for="nama">nama gaun</label>
                <input type="text" name="nama" class="textfield">

                <label for="ukuran">ukuran</label>
                <select class="textfield" name="ukuran">
                    <option value="xs">XS</option>
                    <option value="s">S</option>
                    <option value="m">M</option>
                    <option value="l">L</option>
                    <option value="xl">XL</option>
                </select>

                <label for="jumlah">jumlah</label>
                <select class="textfield" name="jumlah">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>

                <label for="">upload gambar</label>
                <input type="file" name="gambar" id=""><br>

                <input type="submit" name="tambah" value="Tambah Data" class="login-btn">

            </form>
        </div>
    </section>
</body>
</html>