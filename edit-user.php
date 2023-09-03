<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12"> 
            
            <a href="index.php">Kembali</a> |
			<a href="index.php?page=data-user">Lihat Semua Data</a>
            <hr>
        
            <?php
            include 'koneksi.php';
            $id = $_GET['id'];
            $data = mysqli_query($koneksi,"select * from user where id='$id'");
            while($d = mysqli_fetch_array($data)){
                ?>

            <div class="card">
                <div class="card-header">
                  <h3>Edit Data User</h3>
                </div>
            <div class="card-body">
                <form form method="post" action="update-user.php">
                    <div class="row mb-4">
                      <label for="nip" class="col-sm-2 col-form-label"> NIP</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="number" name="nip" value="<?php echo $d['nip']; ?>" >
                      </div>
                    </div>
                    <div class="row mb-4">
                      <label for="nama" class="col-sm-2 col-form-label">  Nama</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input class="form-control" type="text" name="nama" value="<?php echo $d['nama']; ?>">
                      </div>
                    </div>
                    <div class="row mb-4">
                      <label for="jabatan" class="col-sm-2 col-form-label"> Jabatan</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="text" name="jabatan" value="<?php echo $d['jabatan']; ?>">
                      </div>
                    </div>
                    <div class="row mb-4">
                      <label for="email" class="col-sm-2 col-form-label"> E-mail</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="email" name="email" value="<?php echo $d['email']; ?>">
                        <small id="emailHelp" class="form-text text-muted">Pastikan menggunakan email yang valid</small>
                      </div>
                    </div>
                    <div class="row mb-4">
                      <label for="password" class="col-sm-2 col-form-label">  Password</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="password" name="password" value="<?php echo $d['password']; ?>">
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

                <?php 
            }
            ?>

            </div>
        </div>
    </div>
</div>