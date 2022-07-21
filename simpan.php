<?php  

include("form.html");
$vnama=@$_POST['vnama'];
$valamat= @$_POST["valamat"];
$vhp= @$_POST["vhp"];
$vpinjam= @$_POST["vpinjam"];
$vcerita= @$_POST["vcerita"];

//simpan ke dalam file
	$fileku=fopen("data.txt", "a"); //buka file dengan mode archive
	$data=$vnama.";".$valamat.";".$vhp.";".$vpinjam.";".$vcerita."\n"; //gabungkan kata
	fwrite($fileku,$data); //simpan data ke dalam file
	fclose($fileku);	//close agar terjadi write data secara fisik
echo"<pre>";
include("data.txt"); //panggil dam tampilkan
echo"</pre>";

?>