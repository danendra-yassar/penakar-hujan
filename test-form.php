<head>
    <script>
        $(function() {
            $("#date").datepicker({
                autoclose:true,
                todayHighlight:true,
                format:'yyyy-mm-dd',
                language: 'id'
            });
        });
    </script>
</head>


<!-- Page Content -->
<div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    
                        <div class="card">
                            <div class="card-header">
                                <h3>Edit Data Hujan</h3>
                            </div>

                            <?php 
                            include "koneksi.php";
                            $id = $_GET['id'];
                            $query_mysql = mysqli_query($conn,"SELECT * FROM data_hujan WHERE id='$id'")or die(mysqli_error($conn));
                            $nomor = 1;
                            while($data = mysqli_fetch_array($query_mysql)){
                            ?>

                            <form action="update-data-hujan.php" method="post">
                            <div class="card-body">
                                <div class="row g-1">
                                    <div class="col-md-2">
                                        <label for="tanggal" class="form-label">Tanggal Laporan</label>
                                        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                                        <input type="date" name="tanggal" id="date" value="<?php echo $data['tanggal'] ?>" class="form-control mr-2">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>
 
                        <div class="card">
                            <div class="card-header">
                                <h3>Intensitas Hujan Dalam Menit</h3>
                            </div>
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-md-2">
                                        <label for="input5menit" class="form-label">5 Menit</label>
                                        <input class="form-control" type="decimal" name="lima_mnt" value="<?php echo $data['lima_mnt']; ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="input10menit" class="form-label">10 Menit</label>
                                        <input class="form-control" type="decimal" name="sepuluh_mnt" value="<?php echo $data['sepuluh_mnt']; ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="input15menit" class="form-label">15 Menit</label>
                                        <input class="form-control" type="decimal" name="limabelas_mnt" value="<?php echo $data['limabelas_mnt']; ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="input30menit" class="form-label">30 Menit</label>
                                        <input class="form-control" type="decimal" name="tigapuluh_mnt" value="<?php echo $data['tigapuluh_mnt']; ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="input45menit" class="form-label">45 Menit</label>
                                        <input class="form-control" type="decimal" name="empatlima_mnt" value="<?php echo $data['empatlima_mnt']; ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="input60menit" class="form-label">60 Menit</label>
                                        <input class="form-control" type="decimal" name="enampuluh_mnt" value="<?php echo $data['enampuluh_mnt']; ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="input120menit" class="form-label">120 Menit</label>
                                        <input class="form-control" type="decimal" name="seratusduapuluh" value="<?php echo $data['seratusduapuluh']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>

                        <div class="card">
                            <div class="card-header">
                                <h3>Intensitas Hujan Dalam Jam</h3>
                            </div>
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-md-2">
                                        <label for="input3jam" class="form-label">3 Jam</label>
                                        <input class="form-control" type="decimal" name="tiga_jm" value="<?php echo $data['tiga_jm']; ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="input6jam" class="form-label">6 Jam</label>
                                        <input class="form-control" type="decimal" name="enam_jm" value="<?php echo $data['enam_jm']; ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="input12jam" class="form-label">12 Jam</label>
                                        <input class="form-control" type="decimal" name="duabelas_jm" value="<?php echo $data['duabelas_jm']; ?>">
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>

                        <br>
                        
                        <div class="card">
                            <div class="card-header">
                                <h3>Intensitas Hujan Per Jam</h3>
                            </div>
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-md-2">
                                        <label for="stasiun" class="form-label">07 - 08</label>
                                        <input class="form-control" type="decimal" name="tujuh" value="<?php echo $data['tujuh']; ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="no_stasiun" class="form-label">08 - 09</label>
                                        <input class="form-control"  type="decimal" name="delapan" value="<?php echo $data['delapan']; ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="kabupaten" class="form-label">09 - 10</label>
                                        <input class="form-control" type="decimal" name="sembilan" value="<?php echo $data['sembilan']; ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="ketinggian" class="form-label">10 - 11</label>
                                        <input class="form-control"  type="decimal" name="sepuluh" value="<?php echo $data['sepuluh']; ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="bulan" class="form-label">11 - 12</label>
                                        <input class="form-control" type="decimal" name="sebelas" value="<?php echo $data['sebelas']; ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="tahun" class="form-label">12 - 13</label>
                                        <input class="form-control" type="decimal" name="duabelas" value="<?php echo $data['duabelas']; ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="form" class="form-label">13 - 14</label>
                                        <input class="form-control" type="decimal" name="tigabelas" value="<?php echo $data['tigabelas']; ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="nama_pengamat" class="form-label">14 - 15</label>
                                        <input class="form-control" type="decimal" name="empatbelas" value="<?php echo $data['empatbelas']; ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="stasiun" class="form-label">15 - 16</label>
                                        <input class="form-control" type="decimal" name="limabelas" value="<?php echo $data['limabelas']; ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="no_stasiun" class="form-label">16 - 17</label>
                                        <input class="form-control" type="decimal" name="enambelas" value="<?php echo $data['enambelas']; ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="kabupaten" class="form-label">17 - 18</label>
                                        <input class="form-control" type="decimal" name="tujuhbelas" value="<?php echo $data['tujuhbelas']; ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="ketinggian" class="form-label">18 - 19</label>
                                        <input class="form-control" type="decimal" name="delapanbelas" value="<?php echo $data['delapanbelas']; ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="bulan" class="form-label">19 - 20</label>
                                        <input class="form-control" type="decimal" name="sembilanbelas" value="<?php echo $data['sembilanbelas']; ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="form" class="form-label">20 - 21</label>
                                        <input class="form-control" type="decimal" name="duapuluh" value="<?php echo $data['duapuluh']; ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="nama_pengamat" class="form-label">21 - 22</label>
                                        <input class="form-control" type="decimal" name="duasatu" value="<?php echo $data['duasatu']; ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="stasiun" class="form-label">22 - 23</label>
                                        <input class="form-control" type="decimal" name="duadua" value="<?php echo $data['duadua']; ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="no_stasiun" class="form-label">23 - 00</label>
                                        <input class="form-control" type="decimal" name="duatiga" value="<?php echo $data['duatiga']; ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="kabupaten" class="form-label">00 - 01</label>
                                        <input class="form-control" type="decimal" name="duaempat" value="<?php echo $data['duaempat']; ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="ketinggian" class="form-label">01 - 02</label>
                                        <input class="form-control" type="decimal" name="satu" value="<?php echo $data['satu']; ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="bulan" class="form-label">02 - 03</label>
                                        <input class="form-control" type="decimal" name="dua" value="<?php echo $data['dua']; ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="tahun" class="form-label">03 - 04</label>
                                        <input class="form-control" type="decimal" name="tiga" value="<?php echo $data['tiga']; ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="form" class="form-label">04 - 05</label>
                                        <input class="form-control" type="decimal" name="empat" value="<?php echo $data['empat']; ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="nama_pengamat" class="form-label">05 - 06</label>
                                        <input class="form-control" type="decimal" name="lima" value="<?php echo $data['lima']; ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="nama_pengamat" class="form-label">06 - 07</label>
                                        <input class="form-control" type="decimal" name="enam" value="<?php echo $data['enam']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>
                            <div class="col-6">
                                <button type="reset" class="btn btn-danger">Reset</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                    </form>
                    <?php } ?>
                    
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
