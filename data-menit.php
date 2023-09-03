<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">	
			<h3>Data Permenit dan Jam</h3>
 
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
			<br/>
			<br><br>
			<div class="table-responsive">
			<table border="1" class="table table-bordered border-dark">
				<tr>
					<th>No</th>
					<th>Tanggal</th>
					<th>5 Menit</th>
					<th>10 Menit</th>
					<th>15 Menit</th>
					<th>30 Menit</th>
					<th>45 Menit</th>
					<th>60 Menit</th>
					<th>120 Menit</th>
					<th>3 Jam</th>
					<th>6 Jam</th>
					<th>12 Jam</th>
				</tr>
				<?php 
				include "koneksi.php";
				$sql = "SELECT * FROM data_hujan ORDER BY tanggal DESC LIMIT 20";
				$hasil=mysqli_query($conn,$sql);
				$nomor = 1;
				while($data = mysqli_fetch_array($hasil)){
				?>
				<tr>
					<td><?php echo $nomor++; ?></td>
					<td><?php echo date ( 'd F Y' , strtotime ($data['tanggal'])); ?></td>
					<td><?php echo $data['lima_mnt']; ?></td>
					<td><?php echo $data['sepuluh_mnt']; ?></td>
					<td><?php echo $data['limabelas_mnt']; ?></td>
					<td><?php echo $data['tigapuluh_mnt']; ?></td>
					<td><?php echo $data['empatlima_mnt']; ?></td>
					<td><?php echo $data['enampuluh_mnt']; ?></td>
					<td><?php echo $data['seratusduapuluh']; ?></td>
					<td><?php echo $data['tiga_jm']; ?></td>
					<td><?php echo $data['enam_jm']; ?></td>
					<td><?php echo $data['duabelas_jm']; ?></td>
				</tr>
				<?php } ?>
			</table>
			</div>
	</div>
	</div>
	</div>
	</div>