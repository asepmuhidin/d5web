<?php
class DB{
  var $server='localhost';
  var $user='root';
  var $pwd='123';
  var $dbname='dbd5';


  function open()
  {
     $conn=mysqli_connect($this->server,$this->user,$this->pwd,$this->dbname)
     or die('Gagal koneksi ke server '.$this->server);
     return $conn;
  }

 function getData($conn,$sql)
 {
   $res=array();
   $rs=mysqli_query($conn,$sql);

   while($rec=mysqli_fetch_assoc($rs)){
      $res[]=$rec;
   }
   return $res;
 }

}
?>
