<?php   $user="wisnu_938";   $pass="wisnu_938";   $database="LOCALHOST/XE";   $con = oci_connect($user, $pass, $database);   if($con){    echo "Koneksi Sukses";  }   else{    $err = oci_error();    echo "Gagal". $err['text'];   } ?>