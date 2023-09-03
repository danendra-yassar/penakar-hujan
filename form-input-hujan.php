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
			<h1>Penakar Hujan Hellman</h1>
	
	<br/>
 
	<a href="index.php?page=data-hujan">Lihat Semua Data</a> ||
	<a href="index.php">Home</a>
 
	<br/>
	<h3>Input data baru</h3>
	<form action="input-hujan.php" method="post">	
		<table>	
			<tr>
				<td>Intensitas Hujan Per Jam</td>					
			</tr>
			<tr>
			  	<td><label >Tanggal</label></td>
  				<td><input type="text" id="date" name="tanggal"></td>
			</tr>
			<tr>
				<td>07-08</td>
				<td><input type="decimal" name="tujuh"></td>
				<td>08-09</td>
				<td><input type="decimal" name="delapan"></td>
				<td>09-10</td>
				<td><input type="decimal" name="sembilan"></td>
				<td>10-11</td>
				<td><input type="decimal" name="sepuluh"></td>
			</tr>
			<tr>
				<td>11-12</td>
				<td><input type="decimal" name="sebelas"></td>
				<td>12-13</td>
				<td><input type="decimal" name="duabelas"></td>
				<td>13-14</td>
				<td><input type="decimal" name="tigabelas"></td>
				<td>14-15</td>
				<td><input type="decimal" name="empatbelas"></td>
			</tr>
			<tr>
				<td>15-16</td>
				<td><input type="decimal" name="limabelas"></td>
				<td>16-17</td>
				<td><input type="decimal" name="enambelas"></td>
				<td>17-18</td>
				<td><input type="decimal" name="tujuhbelas"></td>
				<td>18-19</td>
				<td><input type="decimal" name="delapanbelas"></td>
			</tr>
			<tr>
				<td>19-20</td>
				<td><input type="decimal" name="sembilanbelas"></td>
				<td>20-21</td>
				<td><input type="decimal" name="duapuluh"></td>
				<td>21-22</td>
				<td><input type="decimal" name="duasatu"></td>
				<td>22-23</td>
				<td><input type="decimal" name="duadua"></td>
			</tr>
			<tr>
				<td>23-24</td>
				<td><input type="decimal" name="duatiga"></td>
				<td>24-01</td>
				<td><input type="decimal" name="duaempat"></td>
				<td>01-02</td>
				<td><input type="decimal" name="satu"></td>
				<td>02-03</td>
				<td><input type="decimal" name="dua"></td>
			</tr>
			<tr>
				<td>03-04</td>
				<td><input type="decimal" name="tiga"></td>
				<td>04-05</td>
				<td><input type="decimal" name="empat"></td>
				<td>05-06</td>
				<td><input type="decimal" name="lima"></td>
				<td>06-07</td>
				<td><input type="decimal" name="enam"></td>
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