<?php
    include("konfigurasi.php");

$hasil = mysqli_connect(DBHOST,DBUSER,DBPASS);

if($hasil){
    echo "koneksi ke mysql Sukses";
}else{
    echo "koneksi kemysql gagal";
}