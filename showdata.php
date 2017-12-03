<?php
  session_start();
  include "DB.php";
  $dbku=new DB();
  $koneksi=$dbku->open();

  $sql="select * from mahasiswa";

  $datasiswa=$dbku->getData($koneksi,$sql);

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <?php  if( isset( $_SESSION['mystatus'] ) ) {?>

      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Suksess..</strong><?php echo $_SESSION['mystatus'];?>  
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <?php } ?>

      <h1>Data Mahasiswa</h1>
      <a href="tambah.php" class="btn btn-secondary">Tambah Data</a>

    <table class="table table-bordered table-dark">
      <thead>
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
        <?php foreach ($datasiswa as $data){?>
        <tr>
          <td><?php echo $data['nim'];?></th>
          <td><?php echo $data['nama'];?></td>
          <td><?php echo $data['email'];?></td>
          <td><?php echo $data['telp'];?></td>
          <td><?php echo $data['alamat'];?></td>
          <td>
              <a href="edit.php?nim=<?php echo $data['nim'];?>" class="btn btn-primary">Edit</a>
              <a href="hapus.php?nim=<?php echo $data['nim'];?>" class="btn btn-danger">Hapus</a>
          </td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
