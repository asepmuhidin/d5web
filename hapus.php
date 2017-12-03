<?php
  session_start();
  include "DB.php";
  $dbku=new DB();
  $koneksi=$dbku->open();

   $nim=$_GET['nim'];
 

  $sql="DELETE FROM mahasiswa where nim='$nim'";
 
  mysqli_query($koneksi,$sql) or die("Gagal menjalankan SQL : $sql");
  $_SESSION['mystatus'] ="Data berhasil dihapus";  
  header("location:http://localhost/d5web/showdata.php");  
 ?> 