<head>
  <script>
  $( function() {
    $( "#date" ).datepicker({
      dateFormat: "yy-mm-dd"
    });
  } );
  </script>
</head>

<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">	
			<h3>Input data baru</h3>
	
		<a href="index.php">Home</a> ||
		<a href="index.php?page=data-menit">Lihat Semua Data</a>
	
		<br><br>
		<form action="index.php?page=input-menit" method="post">

			<table>
				<tr>
					<td><label >Tanggal</label></td>
					<td><input type="text" id="date" name="tanggal"></td>
				</tr>
				<tr>
					<td>5 Menit</td>
					<td><input type="decimal" name="lima"></td>					
				</tr>
				<tr>
					<td>10 Menit</td>
					<td><input type="decimal" name="sepuluh"></td>					
				</tr>	
				<tr>
					<td>15 Menit</td>
					<td><input type="decimal" name="limabelas"></td>					
				</tr>	
				<tr>
					<td>30 Menit</td>
					<td><input type="decimal" name="tigapuluh"></td>					
				</tr>
				<tr>
					<td>45 Menit</td>
					<td><input type="decimal" name="empatlima"></td>					
				</tr>
				<tr>
					<td>60 Menit</td>
					<td><input type="decimal" name="enampuluh"></td>					
				</tr>
				<tr>
					<td>120 Menit</td>
					<td><input type="decimal" name="seratusduapuluh"></td>					
				</tr>
				<tr>
					<td>3 Jam</td>
					<td><input type="decimal" name="tigajam"></td>					
				</tr>
				<tr>
					<td>6 Jam</td>
					<td><input type="decimal" name="enamjam"></td>					
				</tr><tr>
					<td>12 Jam</td>
					<td><input type="decimal" name="duabelasjam"></td>					
				</tr>	
				<tr>
					<td></td>
					<td><input type="submit" value="Simpan"></td>					
				</tr>				
			</table>
		</form>
</div>
</div>
</div>
</div>