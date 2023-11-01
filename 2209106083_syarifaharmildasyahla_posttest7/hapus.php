<?php
    require "koneksi.php";

    $id = $_GET['id'];
    $get = mysqli_query($conn, "delete from pembelian1 where id = $id");
    $pembelian1 = [];

    if ($result) {
        echo "
        <script>
            alert('Data Gagal Dihapus!');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Data Berhasil Dihapus!');
            document.location.href = 'index.php';
        </script>";
    }
?>