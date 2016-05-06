<?php
	$hostname = "ap-cdbr-azure-southeast-b.cloudapp.net";
	$username = "bb7580aebe3a5d";
	$password = "6ec77572";
	$database = "acsm_8da59bbfe2b865c";

	// Koneksi dan memilih database di server
	mysql_connect($hostname,$username,$password) or die("Koneksi Gagal");
	mysql_select_db($database) or die("Database Tidak Ditemukan");
?>
