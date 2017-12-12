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
    
    
    $sql=" UPDATE mahasiswa set 
           nama='$nama',
           email='$email',
           telp='$telp',
           alamat='$alamat'
           WHERE nim='$nim'"; 
          

    mysqli_query($koneksi,$sql) or die('Gagal ekseskusi SQL :' . $sql );

   	$_SESSION['action']="Data <strong>'$nim'</strong> berhasil diupdate..!";
    header("Location:http://localhost/crud-index/");
?>