<?php
require "koneksi.php";

$result = mysqli_query($conn, 'select * from pembelian1');

$pembelian1 = [];

while ($row = mysqli_fetch_assoc($result)) {
    $pembelian1[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>form pembelian</title>
</head>

<body>
    <!-- crud -->
    <main class="dash-container">
        <section class="dash-main">
            <h1>BOOK NOW !</h1>
            <p>
                 <?php
        date_default_timezone_set("Asia/Makassar");
    ?>
    <p>Jam Digital: <b><span id="jam" style="font-size:24"></span></b></p>
    
    <script type="text/javascript">
        window.onload = function() { jam(); }
       
        function jam() {
            var e = document.getElementById('jam'),
            d = new Date(), h, m, s;
            h = d.getHours();
            m = set(d.getMinutes());
            s = set(d.getSeconds());
       
            e.innerHTML = h +':'+ m +':'+ s;
       
            setTimeout('jam()', 1000);
        }
       
        function set(e) {
            e = e < 10 ? '0'+ e : e;
            return e;
        }
    </script>
            </p>
            <hr><br>
                <!-- tambah -->
                <div class="leading-btn">
                    <a href="tambah.php"><button class="add-btn">Tambah</button></a>
                </div><br>

                <!-- table -->
                <table>
                    <thead>
                        <tr>
                            <th>nomor</th>
                            <th>nama gaun</th>
                            <th>ukuran</th>
                            <th>jumlah</th>
                            <th>gambar</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $i = 1;
                        foreach ($pembelian1 as $buy) : ?>
                            <tr>
                                <center>
                                    <td> <?= $i; ?> </td> <!-- id -->
                                    <td> <?php echo $buy["nama"] ?> </td>
                                    <td> <?= $buy["ukuran"] ?> </td>
                                    <td> <?= $buy["jumlah"] ?> </td>
                                    <td><img src="img/<?= $buy['gambar']?>" alt="ini gambar" width="100px" height="100px"> </td>
                                </center>

                                <td class="action">
                                    <a href="ubah.php?id=<?php echo $buy['id']?>"><button class="edit-btn"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="white"><path d="M200-200h56l345-345-56-56-345 345v56Zm572-403L602-771l56-56q23-23 56.5-23t56.5 23l56 56q23 23 24 55.5T829-660l-57 57Zm-58 59L290-120H120v-170l424-424 170 170Zm-141-29-28-28 56 56-28-28Z"/></svg></button></a>
                                    <a href="hapus.php?id=<?php echo $buy['id']?>"><button class="delete-btn" onclick="confirm('yakin ingin menghapus <?php echo $buy['nama']?>?')"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="white"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg></button></a>
                                </td>
                            </tr>
                        <?php $i++; endforeach; ?>
                    </tbody>
                </table>

                <div class="secondary-btn">
                    <a href="posttest.html"><button class="back-btn">kembali</button></a>
                </div><br>
                
        </section>
    </main>
    <!-- <a href="posttest.php">BACK TO HOME</a> -->
</body>

</html>