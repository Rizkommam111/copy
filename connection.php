<?php 
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "db_toko";
    $koneksi = new mysqli($server, $user, $password, $db) or die("Gagal Terhubung");

    $pg = new PDO("pgsql:host='localhost'; dbname='test'", 'postgres', 'konohagakure');
    if($pg)
    {
        echo "Sucesss";
    }else{

    }
    $pg->query("INSERT INTO test (col1) VALUES ('Hello World')");
?>