<?php

$nama = $_POST['nama'];
$tgl = $_POST['t'];
$b = $_POST['b'];
$thn = $_POST['ta'];
$cek = $_POST['hasil'];
$tah = date ('Y');

if (($b=="2" && $tgl >= 30) || ($b=="2" && $tgl < 31)){
	echo "Data Tidak Valid";
	}
//aquarius
elseif (($b=="1" && $tgl >= 20) || ($b=="2" && $tgl < 18)){
	echo "Nama Anda : ". $nama;
	echo "<br/>Zodiak Anda : Aquarius<br/>";
	$cek = $tah - $thn;
	echo "Umur Anda : $cek Tahun";
	}

//pisces
elseif (($b=="2" && $tgl >= 19) || ($b=="3" && $tgl < 20)) {
	echo "Nama Anda : ". $nama;
	echo "<br/>Zodiak Anda : Pisces<br/>";
	$cek = $tah - $thn;
	echo "Umur Anda : $cek Tahun";
	}

//Aries
elseif (($b=="3" && $tgl >= 21) || ($b=="4" && $tgl < 19)) {
	echo "Nama Anda : " . $nama;
	echo "<br/>Zodiak Anda : Aries<br/>";
	$cek = $tah - $thn;
	echo "Umur Anda : $cek Tahun";
	}	

//Taurus
elseif (($b=="4" && $tgl >= 20) || ($b=="5" && $tgl < 20)) {
	echo "Nama Anda : ". $nama; 
	echo "<br/>Zodiak Anda : Taurus<br/>";
	$cek = $tah - $thn;
	echo "Umur Anda : $cek Tahun";
	}
	
//Gemini
elseif (($b=="5" && $tgl >= 21) || ($b=="6" && $tgl < 22)) {
	echo "Nama Anda : ". $nama; 
	echo "<br/>Zodiak Anda : Gemini<br/>";
	$cek = $tah - $thn;
	echo "Umur Anda : $cek Tahun";
	}
	
//Cancer
elseif (($b=="6" && $tgl >= 23) || ($b=="7" && $tgl < 22)) {
	echo "Nama Anda : ". $nama; 
	echo "<br/>Zodiak Anda : Cancer<br/>";
	$cek = $tah - $thn;
	echo "Umur Anda : $cek Tahun";
	}	
	
//Leo
elseif (($b=="7" && $tgl >= 23) || ($b=="8" && $tgl < 22)) {
	echo "Nama Anda : ". $nama; 
	echo "<br/>Zodiak Anda : Leo<br/>";
	$cek = $tah - $thn;
	echo "Umur Anda : $cek  Tahun";
	}
	
//Virgo
elseif (($b=="8" && $tgl >= 23) || ($b=="9" && $tgl < 22)) {
	echo "Nama Anda : ". $nama; 
	echo "<br/>Zodiak Anda : Virgo<br/>";
	$cek = $tah - $thn;
	echo "Umur Anda : $cek Tahun";
	}
	
//Libra
elseif (($b=="9" && $tgl >= 23) || ($b=="10" && $tgl < 22)) {
	echo "Nama Anda : ". $nama; 
	echo "<br/>Zodiak Anda : Libra<br/>";
	$cek = $tah - $thn;
	echo "Umur Anda : $cek Tahun";
	}
	
//Scorpio
elseif (($b=="10" && $tgl >= 23) || ($b=="11" && $tgl < 22)) {
	echo "Nama Anda : ". $nama; 
	echo "<br/>Zodiak Anda : Scorpio<br/>";
	$cek = $tah - $thn;
	echo "Umur Anda : $cek Tahun";
	}		

//Sagittarius
elseif (($b=="11" && $tgl >= 23) || ($b=="12" && $tgl < 22)) {
	echo "Nama Anda : ". $nama; 
	echo "<br/>Zodiak Anda : Sagittarius<br/>";
	$cek = $tah - $thn;
	echo "Umur Anda : $cek Tahun";
	}

//Capricorn
elseif (($b=="12" && $tgl >= 23) || ($b=="1" && $tgl < 1)) {
	echo "Nama Anda : ". $nama; 
	echo "<br/>Zodiak Anda : Capricorn<br/>";
	$cek = $tah - $thn;
	echo "Umur Anda : $cek Tahun";
	}	

?>