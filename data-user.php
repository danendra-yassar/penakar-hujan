<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
            <h1>Penakar Hujan Hellman</h1>
            
            <?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	
    <br>
    <a class="tombol "href="index.php">Home</a> ||
	<a class="button" href="index.php?page=form-input-user">+ Tambah Data Baru</a>
    <hr>
    
    <h3>Data Diri Pengamat</h3>
        <table class="table table-striped">
            <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Email</th>
                <th>Opsi</th>		
            </tr>
            <?php 
            include "koneksi.php";
            $sql = "SELECT * FROM user";
            $hasil=mysqli_query($conn,$sql);
            $nomor = 1;
            while($data = mysqli_fetch_array($hasil)){
            ?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['nip']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['jabatan']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td>
                    <a class="edit" href="?page=edit_data_user&id=<?php echo $data['id']; ?>">Edit</a> |
                    <a class="hapus" href="hapus-user.php?id=<?php echo $data['id']; ?>">Hapus</a>					
                </td>
            </tr>
            <?php } ?>
        </table>
                </div>
            </div>
        </div>
    </div>
</div>