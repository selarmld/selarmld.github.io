<?php
require "koneksi.php";

$result = mysqli_query($conn, 'select * from pembelian');

$pembelian = [];

while ($row = mysqli_fetch_assoc($result)) {
    $pembelian[] = $row;
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
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $i = 1;
                        foreach ($pembelian as $buy) : ?>
                            <tr>
                                <td> <?= $i; ?> </td> <!-- id -->
                                <td> <?php echo $buy["nama"] ?> </td>
                                <td> <?= $buy["ukuran"] ?> </td>
                                <td> <?= $buy["jumlah"] ?> </td>
                                <td class="action">
                                    <a href="ubah.php?id=<?php echo $buy['id']?>"><button class="edit-btn"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="white"><path d="M200-200h56l345-345-56-56-345 345v56Zm572-403L602-771l56-56q23-23 56.5-23t56.5 23l56 56q23 23 24 55.5T829-660l-57 57Zm-58 59L290-120H120v-170l424-424 170 170Zm-141-29-28-28 56 56-28-28Z"/></svg></button></a>
                                    <a href="hapus.php?id=<?php echo $buy['id']?>"><button class="delete-btn" onclick="confirm('yakin ingin menghapus <?php echo $buy['nama']?>?')"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="white"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg></button></a>

                                </td>
                            </tr>
                        <?php $i++; endforeach; ?>
                    </tbody>
                </table>
        </section>
    </main>
    
</body>

</html>