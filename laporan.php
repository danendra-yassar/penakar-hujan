<?php
mysql_connect("localhost","root","");
mysql_select_db("penakar_hujan");

require_once __DIR__ . '/assets/mpdf_v8.0.3-master/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
ob_start(); 
?>
<!DOCTYPE html>
<html>
<body>
 <div align="center">
  <h2 align="center">Data Hujan</h2>
  <table align="center" width="60%" border="1">
   <thead>
   <tr>
    <td colspan="10">Jumlah pada masing-masing periode waktu (dalam milimeter)</td>
    <td rowspan="2">tanggal</td>
    <td colspan="24">JUMLAH HUJAN TIAP JAM (MILIMETER)</td>
    <td rowspan="2">Jumlah 24 jam</tr>
   </tr>
    <tr>
     <th>5 menit</th>
     <th>10 menit</th>
     <th>15 menit</th>
     <th>30 menit</th>
     <th>45 menit</th>
     <th>60 menit</th>
     <th>120 menit</th>
     <th>3 jam</th>
     <th>6 jam</th>
     <th>12 jam</th>
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
   </thead>
   <tbody>
    <?php
    $sql="select * from data_hujan";
    $query=mysql_query($sql) or die(mysql_error());
    while ($data_hujan=mysql_fetch_array($query)) {
    ?> 
    <tr>
     <td><?=$data_hujan['lima_mnt']?></td>
     <td><?=$data_hujan['sepuluh_mnt']?></td>
     <td><?=$data_hujan['limabelas_mnt']?></td>
     <td><?=$data_hujan['tigapuluh_mnt']?></td>
     <td><?=$data_hujan['empatlima_mnt']?></td>
     <td><?=$data_hujan['enampuluh_mnt']?></td>
     <td><?=$data_hujan['srtsduaplh_mnt']?></td>
     <td><?=$data_hujan['tiga_jm']?></td>
     <td><?=$data_hujan['enam_jm']?></td>
     <td><?=$data_hujan['duabelas_jm']?></td>
     <td><?=$data_hujan['tanggal']?></td>
     <td><?=$data_hujan['tujuh_delapan']?></td>
     <td><?=$data_hujan['delapan_sembilan']?></td>
     <td><?=$data_hujan['sembilan_sepuluh']?></td>
     <td><?=$data_hujan['sepuluh_sebelas']?></td>
     <td><?=$data_hujan['sebelas_duabelas']?></td>
     <td><?=$data_hujan['duabelas_tigabelas']?></td>
     <td><?=$data_hujan['tigabelas_empatbelas']?></td>
     <td><?=$data_hujan['empatbelas_limabelas']?></td>
     <td><?=$data_hujan['limabelas_enambelas']?></td>
     <td><?=$data_hujan['enambelas_tujubelas']?></td>
     <td><?=$data_hujan['tujubelas_lapanbelas']?></td>
     <td><?=$data_hujan['lapanbelas_sembilanbelas']?></td>
     <td><?=$data_hujan['sembilanbelas_duapuluh']?></td>
     <td><?=$data_hujan['duapuluh_duasatu']?></td>
     <td><?=$data_hujan['duasatu_duadua']?></td>
     <td><?=$data_hujan['duadua_duatiga']?></td>
     <td><?=$data_hujan['duatiga_duaempat']?></td>
     <td><?=$data_hujan['duaempat_satu']?></td>
     <td><?=$data_hujan['satu_dua']?></td>
     <td><?=$data_hujan['dua_tiga']?></td>
     <td><?=$data_hujan['tiga_empat']?></td>
     <td><?=$data_hujan['empat_lima']?></td>
     <td><?=$data_hujan['lima_enam']?></td>
     <td><?=$data_hujan['enam_tuju']?></td> 
    </tr>
    <?php
    }
    ?>
   </tbody>
   <tr>
        <td colspan="10">Tanggal dan Intensitas Max</td>
        <td rowspan="2">Jml</td>
    </tr>
  </table>
 </div>
</body>
</html>
<?php
 $html = ob_get_contents(); 
 ob_end_clean();
 $mpdf->WriteHTML(utf8_encode($html));
 $mpdf->Output();
?>