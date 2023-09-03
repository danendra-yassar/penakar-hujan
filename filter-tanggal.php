<?php 
    error_reporting(0);

	include 'koneksi.php';

?>

<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
		    <h1>Penakar Hujan Hellman</h1>

 
        <br/>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dataPdf">
            Cetak Data PDF
        </button>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
            Cetak Data Excel 
        </button>
        <center>
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Cetak Data Excel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form method="POST" action="export_excel.php" class="form-inline mt-3" target="_blank">
            <table>
                <tr>
                <td><label for="date1">Tanggal</label></td>
                <td><input type="date" name="date1" id="date1" class="form-control mr-2"></td>
                <td><label for="date2">sampai </label></td>
                <td><input type="date" name="date2" id="date2" class="form-control mr-2"></td>
                </tr>
            </table>
                <br />
                <center>
                <button type="submit" name="submit" class="btn btn-primary" >Cetak</button>
                </center>
            </form>
            </div>
            </div>
        </div>
        </div>
        </center>
        <!-- Modal -->
        <center>
        <div class="modal fade" id="dataPdf" tabindex="-1" role="dialog" aria-labelledby="dataPdfTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="dataPdfTitle">Cetak Data PDF</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form method="POST" action="print.php" class="form-inline mt-3" target="_blank">
            <table>
                <tr>
                <td><label for="date1">Tanggal</label></td>
                <td><input type="date" name="date1" id="date1" class="form-control mr-2"></td>
                <td><label for="date2">sampai </label></td>
                <td><input type="date" name="date2" id="date2" class="form-control mr-2"></td>
                </tr>
            </table>
                <br />
                <center>
                <button type="submit" name="submit" class="btn btn-primary" >Cetak</button>
                </center>
            </form>
            </div>
            </div>
        </div>
        </div>
        </center>
        <center>
	<form method="POST" action="" class="form-inline mt-3">
        <label for="date1">Tanggal mulai </label>
        <input type="date" name="date1" id="date1" class="form-control mr-2">
        <label for="date2">sampai </label>
        <input type="date" name="date2" id="date2" class="form-control mr-2">
        <button type="submit" name="submit" class="btn btn-primary">Cari</button>
    </form>
    <br/>

    

    <center><h3>PENAKAR HUJAN OTOMATIS/HELLMAN</h3></center>
    <br>

    <div class="table-responsive">
    <table style="width: 618px; height: 99px;">
    <tbody>
    <tr>
    <td style="width: 145px;">Nama Stasiun</td>
    <td style="width: 10px;">:</td>
    <td style="width: 393px;">Klimatologi Semarang</td>
    <td style="width: 195px;">Laporan Bulan</td>
    <td style="width: 10px;">:</td>
    <td style="width: 256px;"><?php
                    echo date  ( 'F' , strtotime ($_POST['date1']));
                    $query = "SELECT * FROM data_hujan WHERE tanggal='".$_POST['date1']."'";
                    ?></td>
    <td style="width: 40px;">Form</td>
    <td style="width: 13px;">:</td>
    <td style="width: 18px;">A</td>
    </tr>
    <tr>
    <td style="width: 145px;">No. Stasiun</td>
    <td style="width: 10px;">:</td>
    <td style="width: 393px;">96835</td>
    <td style="width: 195px;">Tahun</td>
    <td style="width: 10px;">:</td>
    <td style="width: 256px;"><?php
                    echo date  ( 'Y' , strtotime ($_POST['date1']));
                        $query = "SELECT * FROM data_hujan WHERE tanggal='".$_POST['date1']."'";
                    ?></td>
    <td style="width: 71px;" colspan="3">&nbsp;</td>
    </tr>
    <tr>
    <td style="width: 145px;">Kabupaten</td>
    <td style="width: 10px;">:</td>
    <td style="width: 393px;">Semarang</td>
    <td style="width: 195px;">Nama Pengamat&nbsp;</td>
    <td style="width: 10px;">:</td>
    <?php 
        $us=mysqli_query($conn, "SELECT * FROM user WHERE nama='".$_SESSION['nama']."'");
        while($er=mysqli_fetch_array($us)) {

    ?>
    <td style="width: 256px;"><?php echo $er['nama']; ?> / NIP : <?php echo $er['nip']; ?></td>
    <?php } ?>
    <td style="width: 71px;" colspan="3">&nbsp;</td>
    </tr>
    <tr>
    <td style="width: 145px;">Ketinggian</td>
    <td style="width: 10px;">:</td>
    <td style="width: 393px;">3m/dpl</td>
    </tr>
    </tbody>
    </table>
    </div>
    <br>

    <div class="table-responsive">
		<table border="1" class="table table-bordered border-dark">
            <tr>
                <td colspan="10"><center>Jumlah pada masing-masing periode waktu (mm)</center></td>
                <td rowspan="2"><center>Tanggal</center></td>
                <td colspan="24"><center>JUMLAH HUJAN TIAP JAM (MILIMETER)</center></td>
                <td rowspan="2"><center>Jumlah 24 Jam</center></td>
            </tr>
            <tr>
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
			$no = 1;
            $t=0;
            if (isset($_POST['submit'])) {
                $date1 = $_POST['date1'];
                $date2 = $_POST['date2'];
               
                if (!empty($date1) && !empty($date2)) {
                 // perintah tampil data berdasarkan range tanggal
                 $sql = mysqli_query($conn, "SELECT * FROM data_hujan WHERE tanggal BETWEEN '$date1' and '$date2' ORDER BY tanggal ASC"); 
                } else {
                 // perintah tampil semua data
                 $sql = mysqli_query($conn, "SELECT * FROM data_hujan WHERE tanggal ORDER BY tanggal ASC"); 
                }
			    while($data = mysqli_fetch_array($sql)){
                    $jumlah = $data['tujuh']+$data['delapan']+$data['sembilan']+$data['sepuluh']+$data['sebelas']+$data['duabelas']+$data['tigabelas']+$data['empatbelas']
                    +$data['limabelas']+$data['enambelas']+$data['tujuhbelas']+$data['delapanbelas']+$data['sembilanbelas']+$data['duapuluh']+$data['duasatu']+$data['duadua']
                    +$data['duatiga']+$data['duaempat']+$data['satu']+$data['dua']+$data['tiga']+$data['empat']+$data['lima']+$data['enam'];

                    $t += $jumlah;
			?>
			<tr>
                
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
                <td><?php echo date ( 'd' , strtotime ($data['tanggal'])); ?></td>
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
                <td><?php echo $jumlah?></td>
			</tr>
			<?php } ?>
            <?php } ?>
            <?php
                $j=mysqli_query($conn, "SELECT SUM(tujuh) AS jml_7, SUM(delapan) AS jml_8, SUM(sembilan) AS jml_9, SUM(sepuluh) AS jml_10, SUM(sebelas) AS jml_11, SUM(duabelas) AS jml_12, SUM(tigabelas) AS jml_13
                , SUM(empatbelas) AS jml_14, SUM(limabelas) AS jml_15, SUM(enambelas) AS jml_16, SUM(tujuhbelas) AS jml_17, SUM(delapanbelas) AS jml_18, SUM(sembilanbelas) AS jml_19, SUM(duapuluh) AS jml_20, SUM(duasatu) AS jml_21, SUM(duadua) AS jml_22
                , SUM(duatiga) AS jml_23, SUM(duaempat) AS jml_24, SUM(satu) AS jml_1, SUM(dua) AS jml_2, SUM(tiga) AS jml_3, SUM(empat) AS jml_4, SUM(lima) AS jml_5, SUM(enam) AS jml_6 FROM data_hujan WHERE tanggal BETWEEN '$date1' and '$date2'");
                while($total = mysqli_fetch_array($j)){
            ?>
            <tr>
                    <td colspan="10"><center>Tanggal dan Intensitas Max</center></td>
                    <td rowspan="2">Jml</td>
                    <td rowspan="2"><?php echo $total['jml_7'];?></td>
                    <td rowspan="2"><?php echo $total['jml_8'];?></td>
                    <td rowspan="2"><?php echo $total['jml_9'];?></td>
                    <td rowspan="2"><?php echo $total['jml_10'];?></td>
                    <td rowspan="2"><?php echo $total['jml_11'];?></td>
                    <td rowspan="2"><?php echo $total['jml_12'];?></td>
                    <td rowspan="2"><?php echo $total['jml_13'];?></td>
                    <td rowspan="2"><?php echo $total['jml_14'];?></td>
                    <td rowspan="2"><?php echo $total['jml_15'];?></td>
                    <td rowspan="2"><?php echo $total['jml_16'];?></td>
                    <td rowspan="2"><?php echo $total['jml_17'];?></td>
                    <td rowspan="2"><?php echo $total['jml_18'];?></td>
                    <td rowspan="2"><?php echo $total['jml_19'];?></td>
                    <td rowspan="2"><?php echo $total['jml_20'];?></td>
                    <td rowspan="2"><?php echo $total['jml_21'];?></td>
                    <td rowspan="2"><?php echo $total['jml_22'];?></td>
                    <td rowspan="2"><?php echo $total['jml_23'];?></td>
                    <td rowspan="2"><?php echo $total['jml_24'];?></td>
                    <td rowspan="2"><?php echo $total['jml_1'];?></td>
                    <td rowspan="2"><?php echo $total['jml_2'];?></td>
                    <td rowspan="2"><?php echo $total['jml_3'];?></td>
                    <td rowspan="2"><?php echo $total['jml_4'];?></td>
                    <td rowspan="2"><?php echo $total['jml_5'];?></td>
                    <td rowspan="2"><?php echo $total['jml_6'];?></td>
                    <td rowspan="2"><?php echo $t?></td>
            </tr>
            <?php }?>
            <tr>
            <?php
            $ha=mysqli_query($conn, "SELECT tanggal, tujuh + delapan + sembilan + sepuluh + sebelas + duabelas + tigabelas + empatbelas
            + limabelas + enambelas + tujuhbelas + delapanbelas + sembilanbelas + duapuluh + duasatu + duadua + duatiga + duaempat + satu + dua + tiga 
            + empat + lima + enam AS hasil FROM `data_hujan` 
            WHERE tanggal BETWEEN '$date1' AND '$date2' ORDER BY hasil DESC LIMIT 10");
            while($h = mysqli_fetch_array($ha)){
            ?>
                    <td><?php echo date ( 'd' , strtotime ($h['tanggal'])); ?></td>
                    
            <?php } ?>
            </tr>
              
            <tr>
                <?php
                $h2=mysqli_query($conn, "SELECT tanggal, tujuh + delapan + sembilan + sepuluh + sebelas + duabelas + tigabelas + empatbelas
                + limabelas + enambelas + tujuhbelas + delapanbelas + sembilanbelas + duapuluh + duasatu + duadua + duatiga + duaempat + satu + dua + tiga 
                + empat + lima + enam AS hasil FROM `data_hujan` 
                WHERE tanggal BETWEEN '$date1' AND '$date2' ORDER BY hasil DESC LIMIT 10");
                while($ha2= mysqli_fetch_array($h2)){
                ?>
                        <td><?php echo $ha2['hasil'] ?></td>
                <?php } ?>
        
            <?php
                $m=mysqli_query($conn, "SELECT MAX(tujuh) AS mak_7, MAX(delapan) AS mak_8, MAX(sembilan) AS mak_9, MAX(sepuluh) AS mak_10, MAX(sebelas) AS mak_11, MAX(duabelas) AS mak_12, MAX(tigabelas) AS mak_13
                , MAX(empatbelas) AS mak_14, MAX(limabelas) AS mak_15, MAX(enambelas) AS mak_16, MAX(tujuhbelas) AS mak_17, MAX(delapanbelas) AS mak_18, MAX(sembilanbelas) AS mak_19, MAX(duapuluh) AS mak_20, MAX(duasatu) AS mak_21, MAX(duadua) AS mak_22
                , MAX(duatiga) AS mak_23, MAX(duaempat) AS mak_24, MAX(satu) AS mak_1, MAX(dua) AS mak_2, MAX(tiga) AS mak_3, MAX(empat) AS mak_4, MAX(lima) AS mak_5, MAX(enam) AS mak_6 FROM data_hujan WHERE tanggal BETWEEN '$date1' and '$date2'");
                while($maks = mysqli_fetch_array($m)){
            ?>
                    <td>Max</td>
                    <td><?php echo $maks['mak_7'];?></td>
                    <td><?php echo $maks['mak_8'];?></td>
                    <td><?php echo $maks['mak_9'];?></td>
                    <td><?php echo $maks['mak_10'];?></td>
                    <td><?php echo $maks['mak_11'];?></td>
                    <td><?php echo $maks['mak_12'];?></td>
                    <td><?php echo $maks['mak_13'];?></td>
                    <td><?php echo $maks['mak_14'];?></td>
                    <td><?php echo $maks['mak_15'];?></td>
                    <td><?php echo $maks['mak_16'];?></td>
                    <td><?php echo $maks['mak_17'];?></td>
                    <td><?php echo $maks['mak_18'];?></td>
                    <td><?php echo $maks['mak_19'];?></td>
                    <td><?php echo $maks['mak_20'];?></td>
                    <td><?php echo $maks['mak_21'];?></td>
                    <td><?php echo $maks['mak_22'];?></td>
                    <td><?php echo $maks['mak_23'];?></td>
                    <td><?php echo $maks['mak_24'];?></td>
                    <td><?php echo $maks['mak_1'];?></td>
                    <td><?php echo $maks['mak_2'];?></td>
                    <td><?php echo $maks['mak_3'];?></td>
                    <td><?php echo $maks['mak_4'];?></td>
                    <td><?php echo $maks['mak_5'];?></td>
                    <td><?php echo $maks['mak_6'];?></td>
                    <?php } ?>
                <?php
                $hm=mysqli_query($conn, "SELECT tanggal, tujuh + delapan + sembilan + sepuluh + sebelas + duabelas + tigabelas + empatbelas
                + limabelas + enambelas + tujuhbelas + delapanbelas + sembilanbelas + duapuluh + duasatu + duadua + duatiga + duaempat + satu + dua + tiga 
                + empat + lima + enam AS hasil FROM `data_hujan` 
                WHERE tanggal BETWEEN '$date1' AND '$date2' ORDER BY hasil DESC LIMIT 1");
                while($ham= mysqli_fetch_array($hm)){
                ?>
                        <td><?php echo $ham['hasil'] ?></td>
                <?php } ?>
            </tr>
            
            <tr>
                    <td colspan="36">Jam Pemeriksaan hujan model Obs (Waktu setempat)
                    <br /> 
                    Jam : 07.00 WIB
                    </td>
            </tr>
		</table>
    </div>
	</center>
</div>
</div>
</div>
</div>