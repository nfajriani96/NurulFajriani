<?php 
include "../../config/connection.php";
include "../../config/fungsi_indotgl.php";
include "../../config/kode_auto.php";
include "../../../config/fungsi_thumb.php";


$module=$_GET['module'];
$act=$_GET['act'];

if($module=='instansi' AND $act=='hapus' ){ 
	mysql_query("delete from tabel_instansi where id_instansi='$_GET[id]'");
	header('location:../../media.php?module='.$module);
}

if($module=='instansi' AND $act=='input' ){
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(000000,999999);
  $nama_file_unik = $acak.$nama_file;
	if (!empty($lokasi_file)){ 
		Uploadfoto($nama_file_unik);
	mysql_query("insert into tabel_instansi set id_instansi='$_POST[id]', 
											  nm_instansi='$_POST[nama]',
											  alamat_instansi='$_POST[alamat]',
											  kodepos='$_POST[kode]',
											  kab_instansi='$_POST[kab]',
											  prop_instansi='$_POST[prov]',
											  telpon='$_POST[telp]',
											  foto='$nama_file_unik'
											  ");
	
	header('location:../../media.php?module='.$module);
	}
	else{
	mysql_query("insert into tabel_instansi set id_instansi='$_POST[id]', 
											  nm_instansi='$_POST[nama]',
											  alamat_instansi='$_POST[alamat]',
											  kodepos='$_POST[kode]',
											  kab_instansi='$_POST[kab]',
											  prop_instansi='$_POST[prov]',
											  telpon='$_POST[telp]'
											  ");
	
	header('location:../../media.php?module='.$module);
	
	}
}

elseif($module=='instansi' AND $act=='edit' ){
	$lokasi_file    = $_FILES['fupload']['tmp_name'];
	$tipe_file      = $_FILES['fupload']['type'];
	$nama_file      = $_FILES['fupload']['name'];
	$acak           = rand(000000,999999);
	$nama_file_unik = $acak.$nama_file;
	if (!empty($lokasi_file)){  
	
	Uploadfoto($nama_file_unik);
	mysql_query("update tabel_instansi set nm_instansi='$_POST[nama]',
											  alamat_instansi='$_POST[alamat]',
											  kodepos='$_POST[kode]',
											  kab_instansi='$_POST[kab]',
											  prop_instansi='$_POST[prov]',
											  telpon='$_POST[telp]',
											  foto='$nama_file_unik'
										where id_instansi='$_POST[id]'");
	
	header('location:../../media.php?module='.$module);
	}else {
	mysql_query("update tabel_instansi set nm_instansi='$_POST[nama]',
											  alamat_instansi='$_POST[alamat]',
											  kodepos='$_POST[kode]',
											  kab_instansi='$_POST[kab]',
											  prop_instansi='$_POST[prov]',
											  telpon='$_POST[telp]'
										where id_instansi='$_POST[id]'");
	
	header('location:../../media.php?module='.$module);
	
	
	
	}
}
?>