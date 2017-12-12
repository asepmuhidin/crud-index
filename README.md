# crud-index
Prepared :
- Buat database 
  create database dbtest;
  
- Buat tabel mahasiswa :

create table mahasiswa(
nim varchar(10) PRIMARY KEY,
nama varchar(40),
email varchar(30),
telp varchar(20),
alamat varchar(150));

- insert data 

>> insert into mahasiswa values('0001','Hamid','hamid@gmail.com','9011222','Bekasi');
>> insert into mahasiswa values('0002','daud','daud@gmail.com','1011222','Bogor');
>> insert into mahasiswa values('0003','Shakira','shakira@gmail.com','111222','Bekasi');

Penjelasan :
Pengembangan dari CRUD SESSION, pada bagian ini proses CRUD berada hanya dalam satu file yaitu index.php. 
Jadi penambahan file index.php yang merupakan pusat semua proses


Running :
http://localhost/crud-index
