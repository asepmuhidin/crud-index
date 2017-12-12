<?php
    include "DB.php";
    $dbku=new DB();
    $koneksi=$dbku->open();
    $sql="select * from mahasiswa";

    $datasiswa=$dbku->recordset($sql,$koneksi);
?>
<a href="index.php?action=insert&title=Insert Data Mahasiswa" class="btn btn-primary">Insert Data</a>
<p></p>
 <table class="table table-bordered">
  <thead  class="thead-light">
    <tr>
      <th>NIM</th>
      <th>Nama Mahasiswa</th>
      <th>Email</th>
      <th>Telp</th>
      <th>Alamat</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($datasiswa as $rec):?>
    <tr>
      <td><?php echo $rec['nim'];?></td>
      <td><?php echo $rec['nama'];?></td>
      <td><?php echo $rec['email'];?></td>
      <td><?php echo $rec['telp'];?></td>
      <td><?php echo $rec['alamat'];?></td>
      <td>
		 <a href="index.php?nim=<?php echo $rec['nim'];?>&action=edit&title=Edit Data Mahasiswa :<?php echo $rec['nama'];?> " class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Edit </a>
		 <a href="hapus.php?nim=<?php echo $rec['nim'];?>" class="btn btn-danger btn-sm"><i class="fas fa-eraser"></i> Hapus</a>
	  </td>
    </tr>
   <?php endforeach;?> 
  </tbody>
</table>