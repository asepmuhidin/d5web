<!doctype html>
<html lang="en">
  <head>
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <br>
      <div class="card">
        <div class="card-header">
          Tambah Data Siswa
        </div>
        <div class="card-body">
          <form action="simpan.php" method="POST">
              <div class="form-group row">
                  <label class="col-sm-3 col-form-label">NIM</label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control" placeholder="NIM" name="tnim">
                  </div>
              </div>
              <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Nama Mahasiswa</label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control" placeholder="Nama Mahasiswa" name="tnama">
                  </div>
              </div>
              <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Email</label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control" placeholder="Email" name="temail">
                  </div>
              </div>
              
              <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Telp</label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control" placeholder="Telp" name="ttelp">
                  </div>
              </div>
              
              <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Alamat</label>
                  <div class="col-sm-9">
                      <textarea class="form-control" placeholder="Alamat" 
                      name="talamat"></textarea>
                  </div>
              </div>
              
              <div class="form-group row">
                <div class="col-sm-3">
                </div>
                <div class="col-sm-9">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </div>
          </form>
        </div>
      </div>

    </div>
  </body>
</html>
