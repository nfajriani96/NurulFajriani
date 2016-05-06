<?php
include "config/koneksi.php";

	
	

	if($_GET['module']=="home"){
	include "modul/home/home.php";
	}
	else if($_GET['module']=="instansi"){
	include "modul/instansi/instansi.php";
	}
	else if($_GET['module']=="kordinat"){
	include "modul/kordinat/kordinat.php";
	}
	else if($_GET['module']=="kategori"){
	include "modul/kategori/kategori.php";
	}
	else if($_GET['module']=="tindakan"){
	include "modul/tindakan/tindakan.php";
	}
	else if($_GET['module']=="poliklinik"){
	include "modul/poliklinik/poliklinik.php";
	}
	else if($_GET['module']=="obat"){
	include "modul/obat/obat.php";
	}
	else if($_GET['module']=="ruangan"){
	include "modul/ruangan/ruangan.php";
	}
	else if($_GET['module']=="dokter"){
	include "modul/dokter/dokter.php";
	}
	else if($_GET['module']=="kunjungan"){
	include "modul/kunjungan/kunjungan.php";
	}
	else if($_GET['module']=="transaksibiasa"){
	include "modul/t_p_biasa/t_p_biasa.php";
	}
	else if($_GET['module']=="rekammedis"){
	include "modul/rekam_medis/rekammedis.php";
	}
	else if($_GET['module']=="transaksirekammedis"){
	include "modul/trm/trm.php";
	}
	else if($_GET['module']=="laporan"){
	include "modul/laporan/laporan.php";
	}
?>