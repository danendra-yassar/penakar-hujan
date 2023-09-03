<head>
	<link rel="stylesheet" href="http://code.jquery.com/ ui/ 1.10.3/ themes/ smoothness/ jquery-ui.css" type="text/css" />

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>

<body>
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

<!-- Page Content -->
<div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    
                        <div class="card">
                            <div class="card-header">
                                <h3>Sistem Informasi Input Data Curah Hujan Otomatis / Tipe Hellman Stasiun Klimatologi Semarang</h3>
                            </div>
                            <form action="index.php?page=input-hujan-all" method="post">
                            <div class="card-body">
                                <div class="row g-1">
                                    <div class="col-md-2">
                                        <label for="tanggal" class="form-label">Tanggal Laporan</label>
                                        <input type="date" class="form-control" id="tanggal" name="tanggal">
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
                                        <input type="text" class="form-control" type="decimal" name="lima_mnt">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="input10menit" class="form-label">10 Menit</label>
                                        <input type="text" class="form-control" type="decimal" name="sepuluh_mnt">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="input15menit" class="form-label">15 Menit</label>
                                        <input type="text" class="form-control" type="decimal" name="limabelas_mnt">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="input30menit" class="form-label">30 Menit</label>
                                        <input type="text" class="form-control" type="decimal" name="tigapuluh_mnt">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="input45menit" class="form-label">45 Menit</label>
                                        <input type="text" class="form-control" type="decimal" name="empatlima_mnt">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="input60menit" class="form-label">60 Menit</label>
                                        <input type="text" class="form-control" type="decimal" name="enampuluh_mnt">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="input120menit" class="form-label">120 Menit</label>
                                        <input type="text" class="form-control" type="decimal" name="seratusduapuluh">
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
                                        <input type="text" class="form-control" type="decimal" name="tiga_jm">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="input6jam" class="form-label">6 Jam</label>
                                        <input type="text" class="form-control" type="decimal" name="enam_jm">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="input12jam" class="form-label">12 Jam</label>
                                        <input type="text" class="form-control" type="decimal" name="duabelas_jm">
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
                                        <input type="text" class="form-control" type="decimal" name="tujuh">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="no_stasiun" class="form-label">08 - 09</label>
                                        <input type="text" class="form-control"  type="decimal" name="delapan">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="kabupaten" class="form-label">09 - 10</label>
                                        <input type="text" class="form-control" type="decimal" name="sembilan">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="ketinggian" class="form-label">10 - 11</label>
                                        <input type="text" class="form-control"  type="decimal" name="sepuluh">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="bulan" class="form-label">11 - 12</label>
                                        <input type="text" class="form-control" type="decimal" name="sebelas">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="tahun" class="form-label">12 - 13</label>
                                        <input type="text" class="form-control" type="decimal" name="duabelas">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="form" class="form-label">13 - 14</label>
                                        <input type="text" class="form-control" type="decimal" name="tigabelas">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="nama_pengamat" class="form-label">14 - 15</label>
                                        <input type="text" class="form-control" type="decimal" name="empatbelas">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="stasiun" class="form-label">15 - 16</label>
                                        <input type="text" class="form-control" type="decimal" name="limabelas">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="no_stasiun" class="form-label">16 - 17</label>
                                        <input type="text" class="form-control" type="decimal" name="enambelas">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="kabupaten" class="form-label">17 - 18</label>
                                        <input type="text" class="form-control" type="decimal" name="tujuhbelas">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="ketinggian" class="form-label">18 - 19</label>
                                        <input type="text" class="form-control" type="decimal" name="delapanbelas">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="bulan" class="form-label">19 - 20</label>
                                        <input type="text" class="form-control" type="decimal" name="sembilanbelas">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="form" class="form-label">20 - 21</label>
                                        <input type="text" class="form-control" type="decimal" name="duapuluh">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="nama_pengamat" class="form-label">21 - 22</label>
                                        <input type="text" class="form-control" type="decimal" name="duasatu">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="stasiun" class="form-label">22 - 23</label>
                                        <input type="text" class="form-control" type="decimal" name="duadua">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="no_stasiun" class="form-label">23 - 00</label>
                                        <input type="text" class="form-control" type="decimal" name="duatiga">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="kabupaten" class="form-label">00 - 01</label>
                                        <input type="text" class="form-control" type="decimal" name="duaempat">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="ketinggian" class="form-label">01 - 02</label>
                                        <input type="text" class="form-control" type="decimal" name="satu">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="bulan" class="form-label">02 - 03</label>
                                        <input type="text" class="form-control" type="decimal" name="dua">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="tahun" class="form-label">03 - 04</label>
                                        <input type="text" class="form-control" type="decimal" name="tiga">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="form" class="form-label">04 - 05</label>
                                        <input type="text" class="form-control" type="decimal" name="empat">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="nama_pengamat" class="form-label">05 - 06</label>
                                        <input type="text" class="form-control" type="decimal" name="lima">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="nama_pengamat" class="form-label">06 - 07</label>
                                        <input type="text" class="form-control" type="decimal" name="enam">
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
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

</body>