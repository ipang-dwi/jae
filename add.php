<?php
	session_start();
	if (!isset($_SESSION['login']))
		header('Location: index.php');
	include('configdb.php');
	$alternatif = $_POST['alternatif'];
	$tempat = $_POST['tempat']; 
	$tanggal = $_POST['tanggal'];
	$k1 = $_POST['k1']; 
	$k2 = $_POST['k2'];
	$k3 = $_POST['k3'];
	$k4 = $_POST['k4'];
	
	$result = $mysqli->query("INSERT INTO `alternatif` (`id_alternatif`, `alternatif`, `tempat_lahir`, `tanggal_lahir`, `k1`, `k2`, `k3`, `k4`) 
								VALUES (NULL, '".$alternatif."', '".$tempat."', '".$tanggal."', '".$k1."', '".$k2."', '".$k3."', '".$k4."');");
	if(!$result){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
	else{
		header('Location: alternatif.php');
	}
?>