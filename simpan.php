<?php  
include("form.html");
$nim=@$_POST['nim'];
$nama = @$_POST["nama"];
$kelas = @$_POST["kelas"];
$jurusan = @$_POST["jurusan"];
$fakultas = @$_POST["fakultas"];

	$fileku=fopen("data.txt", "a"); 
	$data=$nim.";".$nama.";".$kelas.";".$jurusan.";".$fakultas."\n"; 
	fwrite($fileku,$data); 
	fclose($fileku);	
echo"<pre>";
include("data.txt"); 
echo"</pre>";
?>