<body background="kalender.jpg">
<?php
$hari=date("d");
$hariini=$hari;
$bulan=date("m");
$tahun=date("Y");

$jumlahhari=date("t",mktime(0,0,0,$bulan,$hari,$tahun));
?>
<br><br>

<?php
switch($bulan){
	case 1: $nmbulan = "January";break;
	case 2: $nmbulan = "February";break;
	case 3: $nmbulan = "March";break;
	case 4: $nmbulan = "April";break;
	case 5: $nmbulan = "Mey";break;
	case 6: $nmbulan = "June";break;
	case 7: $nmbulan = "July";break;
	case 8: $nmbulan = "August";break;
	case 9: $nmbulan = "September";break;
	case 10: $nmbulan = "October";break;
	case 11: $nmbulan = "November";break;
	case 12: $nmbulan = "December";break;
}
echo"<center><h1>$nmbulan $tahun </h1></center>";?>
<br>
<table style="border: 2px solid #FFE4E1" align="center" cellpadding="10">
<tr bgcolor="#FFE4E1">
	<td align="center"><font color="#FF0000">S</font></td>
	<td align="center">M</td>
	<td align="center">T</td>
	<td align="center">W</td>
	<td align="center">T</td>
	<td align="center">F</td>
	<td align="center">S</td>
</tr>
<br>
<?php
$s=date("w",mktime(0,0,0,$bulan,1,$tahun));
for ($ds=1; $ds<=$s ; $ds++) {
	echo"<td></td>" ;
}

for($d=1;$d<=$jumlahhari;$d++){
	if(date("w",mktime(0,0,0,$bulan,$d,$tahun))==0){
		echo"<tr>";
	}

	$warna="#000000";
	$warnasel="#ffffff";

	if(date("l",mktime(0,0,0,$bulan,$d,$tahun))=="Sunday"){
		$warna="#FF0000";
	}

	if($hariini == $d){
		$warna="white";
		$warnasel="#808000";
	}

	echo" <td align=center valign=middle bgcolor=$warnasel> <span style=\"color: $warna\"> $d </span></td>";
	if(date("w",mktime(0,0,0,$bulan,$d,$tahun))==6){
		echo"</tr>";
	}
}
echo'</table>';
?>
</body>