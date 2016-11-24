<html>
<head>
  <title>AKN Bojonegoro</title>
</head>
<body>
<legend>PWEB SK06-3</legend>
<h2> Menghitung Volume Lingkaran </h2>
<hr>
<?php
	$jari = $_POST['jarijari'];
	if ($_POST['jarijari']==""){
		echo"Masukan angka dulu...";
		echo"<form action='volume-bola.html'>
				<input type='submit' value='Back'>
			 </form>";
	} else {
		$phi = $_POST['phi'];
	$hitung = (4/3*3.14)*($jari*$jari*$jari);
		echo"Rumus = (1/3*$phi)*($jari*$jari) <br>";
		echo"Jari-jari = $jari <br><br>";
		echo"Volume Lingkaran = $hitung cm";
		echo"<form action='volume-bola.html'>
				<input type='submit' value='Back'>
			 </form>";
	}
?>