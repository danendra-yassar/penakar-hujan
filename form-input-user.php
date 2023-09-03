<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

					<a href="index.php">Kembali</a> |
					<a href="index.php?page=data-user">Lihat Semua Data</a>
                    <hr>
    	
              <div class="card">
                <div class="card-header">
                  <h3>Input Data User</h3>
                </div>
                <div class="card-body">
                <form action="index.php?page=input-user" method="post" class=row>
                    <div class="row mb-4">
                      <label for="nip" class="col-sm-2 col-form-label"> NIP</label>
                      <div class="col-sm-10">
                        <input type="number" class="form-control" name="nip">
                      </div>
                    </div>
                    <div class="row mb-4">
                      <label for="nama" class="col-sm-2 col-form-label">  Nama</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama">
                      </div>
                    </div>
                    <div class="row mb-4">
                      <label for="jabatan" class="col-sm-2 col-form-label"> Jabatan</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="jabatan">
                      </div>
                    </div>
                    <div class="row mb-4">
                      <label for="email" class="col-sm-2 col-form-label"> E-mail</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" name="email">
                        <small id="emailHelp" class="form-text text-muted">Pastikan menggunakan email yang valid</small>
                      </div>
                    </div>
                    <div class="row mb-4">
                      <label for="password" class="col-sm-2 col-form-label">  Password</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" name="password">
                        <small id="passHelp" class="form-text text-muted">Password terdiri dari 8 karakter huruf dan terdapat angka</small>
                      </div>
                    </div>                   
                    <div class="col-sm-6">
                        <button type="reset" class="btn btn-danger">Reset</button>
                        <button type="submit" value="simpan" class="btn btn-primary">Submit</button>
                    </div>
                  </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>