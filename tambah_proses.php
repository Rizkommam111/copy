<?php 
    include('connection.php');

    $id = $_POST['id'];
    $nama = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $sql = "INSERT INTO `tb_produk`(`id`, `nama_produk`, `harga`, `stok`) VALUES ('$id','$nama','$harga','$stok')";
    $koneksi->query($sql);
    
?>