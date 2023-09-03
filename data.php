<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
            <table class='table'>

            <tr>
                <th>No.</th>
                <th>Pengamat</th>
                <th>NIP</th>
                <th>Nomor Stasiun</th>
                <th>Nama Stasiun</th>
                <th>Tanggal Input</th>
                <th>Laporan</th>
                <th>Aksi</th>
                <th></th>
            </tr>

            <?php 
                include 'koneksi.php';
                $no = 1;
                $data = mysqli_query($conn,"SELECT * FROM user INNER JOIN stasiun");
                while($d = mysqli_fetch_array($data)){
            ?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['nip']; ?></td>
				<td><?php echo $d['no_stasiun']; ?></td>
                <td><?php echo $d['nama_stasiun']; ?></td>
				<td>
                <a href="edit.php?id=<?php echo $d['id']; ?>">UNDUH</a>
                </td>
                <td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>

            </table>
        </div>
        </div>
    </div>
</div>