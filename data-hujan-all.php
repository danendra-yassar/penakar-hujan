
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
	<h3>Data Hujan</h3>

	<div class="table-responsive">
	<table border="1" class="table table-bordered border-dark" rules="all">
		<tr>
			<td>-</td>
			<td colspan="10"><center>Jumlah pada masing-masing periode waktu (mm)</center></td>
			<td colspan="24"><center>JUMLAH HUJAN TIAP JAM (MILIMETER)</center></td>
			<td rowspan="2"><center>Jumlah 24 Jam</center></td>
			<td rowspan="2"><center>Opsi</center></td>
		</tr>
		<tr>
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
            <th>07-08</th>
            <th>08-09</th>
            <th>09-10</th>
            <th>10-11</th>
            <th>11-12</th>
            <th>12-13</th>
            <th>13-14</th>
            <th>14-15</th>
            <th>15-16</th>
            <th>16-17</th>
            <th>17-18</th>
            <th>18-19</th>
            <th>19-20</th>
            <th>20-21</th>
            <th>21-22</th>
            <th>22-23</th>
            <th>23-24</th>
            <th>24-01</th>
            <th>01-02</th>
            <th>02-03</th>
            <th>03-04</th>
            <th>04-05</th>
            <th>05-06</th>
            <th>06-07</th>	
		</tr>
		<?php 
		include "koneksi.php";
		$sql = "SELECT * FROM data_hujan WHERE tanggal ORDER BY tanggal DESC LIMIT 10";
        $hasil=mysqli_query($conn,$sql);
		$nomor = 1;
		while($data = mysqli_fetch_array($hasil)){
		?>
		<tr>
			
			<?php
				$jumlah = $data['tujuh']+$data['delapan']+$data['sembilan']+$data['sepuluh']+$data['sebelas']+$data['duabelas']+$data['tigabelas']+$data['empatbelas']
				+$data['limabelas']+$data['enambelas']+$data['tujuhbelas']+$data['delapanbelas']+$data['sembilanbelas']+$data['duapuluh']+$data['duasatu']+$data['duadua']
				+$data['duatiga']+$data['duaempat']+$data['satu']+$data['dua']+$data['tiga']+$data['empat']+$data['lima']+$data['enam'];
			?>
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
            <td><?php echo $data['tujuh']; ?></td>
            <td><?php echo $data['delapan']; ?></td>
            <td><?php echo $data['sembilan']; ?></td>
            <td><?php echo $data['sepuluh']; ?></td>
            <td><?php echo $data['sebelas']; ?></td>
            <td><?php echo $data['duabelas']; ?></td>
            <td><?php echo $data['tigabelas']; ?></td>
            <td><?php echo $data['empatbelas']; ?></td>
            <td><?php echo $data['limabelas']; ?></td>
            <td><?php echo $data['enambelas']; ?></td>
            <td><?php echo $data['tujuhbelas']; ?></td>
            <td><?php echo $data['delapanbelas']; ?></td>
            <td><?php echo $data['sembilanbelas']; ?></td>
            <td><?php echo $data['duapuluh']; ?></td>
            <td><?php echo $data['duasatu']; ?></td>
            <td><?php echo $data['duadua']; ?></td>
            <td><?php echo $data['duatiga']; ?></td>
            <td><?php echo $data['duaempat']; ?></td>
            <td><?php echo $data['satu']; ?></td>
            <td><?php echo $data['dua']; ?></td>
            <td><?php echo $data['tiga']; ?></td>
            <td><?php echo $data['empat']; ?></td>
            <td><?php echo $data['lima']; ?></td>
            <td><?php echo $data['enam']; ?></td>
			<td><?php echo $jumlah;?> </td>
			<td>
				<a class="edit" href="?page=test-form&id=<?php echo $data['id']; ?>">Edit</a> |
				<a class="hapus" href="?page=hapus-data-hujan&id=<?php echo $data['id']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>
	</div>
	</div>
	</div>
	</div>
	</div>