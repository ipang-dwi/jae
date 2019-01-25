<?php
	@session_start();
	$_SESSION['judul'] = 'SPK JAE';
	$_SESSION['welcome'] = 'SPK JAE Menggunakan Metode SAW';
	$_SESSION['by'] = 'FIRSTPLATO LAB';
	$mysqli = new mysqli('localhost','firstpla_1','@lab1717','firstpla_jae');
	if($mysqli->connect_errno){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
?>