<?php

class DB {

    var $server='localhost';
    var $user='root';
    var $password='';
    var $dbname='dbtest';

    function open()
    {
        $conn=mysqli_connect($this->server,$this->user,
            $this->password,$this->dbname) 
            or die('gagal koneksi ke '.$this->server);
        return $conn;    
    }

    function recordset($sql,$koneksi)
    {
        $ret=array();
        $rs=mysqli_query($koneksi,$sql);
        while($rows=mysqli_fetch_assoc($rs)){
            $ret[]=$rows;
        }

        return $ret;
    }

}
?>