<?php
include './../header.php';?>
<?php
if (isset($_GET[col])) { $col=$_GET[col]; } else { $col=50; }
$file=file("./stat.log"); ?>

<center>
<?php
if ($col>sizeof($file)) { $col=sizeof($file); }
echo "Последние <b>".$col."</b> посещений сайта:"; ?>

<table>
<tr>
	<th><b>Время и дата</b></th>
	<th><b>Данные о посетителе</b></th>
	<th><b>IP/прокси</b></th>
	<th><b>Посещенный URL</b></th>
</tr>

<?php
   for ($si=sizeof($file)-1; $si+1>sizeof($file)-$col; $si--) {
   $string=explode("|",$file[$si]);
   $q1[$si]=$string[0]; // дата и время
   $q2[$si]=$string[1]; // имя бота
   $q3[$si]=$string[2]; // ip бота
   $q4[$si]=$string[3]; // адрес посещения
echo '<tr>
		<td>'.$q1[$si].'</td>
		<td>'.$q2[$si].'</td>
		<td>'.$q3[$si].'</td>
		<td>'.$q4[$si].'</td>
	  </tr>';
}
echo '</table>';
echo '<br>Просмотреть последние <a href=?col=100>100</a><a href=?col=500>500</a> <a href=?col=1000>1000</a> посещений.';
echo '<br>Просмотреть <a href=?col='.sizeof($file).'>все посещения</a>.</center>';
?>