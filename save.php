<?php
	session_start();
    include "DB.php";
    $dbku=new DB();
    $koneksi=$dbku->open();
    
    $nim=$_POST['tnim'];
    $nama=$_POST['tnama'];
    $email=$_POST['temail'];
    $telp=$_POST['ttelp'];
    $alamat=$_POST['talamat'];
    
    
    $sql="INSERT INTO mahasiswa(nim,nama,email,telp,alamat) 
          VALUES('$nim','$nama','$email','$telp','$alamat')";

    mysqli_query($koneksi,$sql) or die('Gagal ekseskusi SQL :' . $sql );
	$_SESSION['action']="Data <strong>'$nim'</strong> berhasil ditambahkan..!";
    header("Location:http://localhost/crud-index/");
?>