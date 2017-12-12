<?php
	session_start();
    include "DB.php";
    $dbku=new DB();
    $koneksi=$dbku->open();
    
    $nim=$_GET['nim'];
     
    $sql="DELETE FROM mahasiswa where nim='$nim'";

    mysqli_query($koneksi,$sql) or die('Gagal ekseskusi SQL :' . $sql );
	$_SESSION['action']="Data <strong>'$nim'</strong> berhasil dihapus..!";
    header("Location:http://localhost/crud-index/");
?>