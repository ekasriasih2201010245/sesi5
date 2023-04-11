<?php
    include("konfigurasi.php");
    
    $hasil = mysqli_connect(DBHOST, DBUSER, DBPASS);

    if($hasil){
        echo "koneksi ke Mysql Sukses";
    }else{
        echo "koneksi ke Mysql Gagal";
    }