<?php
$konekPDO = null;
try {
    $konekPDO = new PDO('mysql:host=localhost;dbname=kasir_ama',"root","");

    //set eror
    $konekPDO->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

   
}
catch   (PDOException $e) {
    print "koneksi atau query bermasalah: ". $e->getMessage() . "<br/>";
    die();
     
}
?>