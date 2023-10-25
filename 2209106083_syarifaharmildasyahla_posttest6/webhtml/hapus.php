<?php
    require "koneksi.php";

    $id = $_GET['id'];
    $get = mysqli_query($conn, "delete from pembelian where id = $id");
    $pembelian = [];

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