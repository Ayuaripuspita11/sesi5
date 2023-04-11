<?php
    include("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT);

    if($cnn){
        $tbel = "tbMATKUL";
        $sql = "CREATE TABLE $tbel(
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            kodeMK VARCHAR(8),
            matakuliah VARCHAR(50),
            sks INT

        )" ;
        $hasil = mysqli_query($cnn, $sql );
        if($hasil){
            echo "pembuatan table " . $tbel . "sukses";
        }else{
        echo "pembuatan table" . $tbel . "gagal";

        }
    }else{
        echo "koneksi kemysql gagal";
    }