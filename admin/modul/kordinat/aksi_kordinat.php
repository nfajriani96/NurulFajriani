<?php 
include "../../config/connection.php";
include "../../config/fungsi_indotgl.php";
include "../../config/kode_auto.php";


$module=$_GET['module'];
$act=$_GET['act'];

if($module=='kordinat' AND $act=='hapus' ){ 
	mysql_query("delete from tabel_kordinat where id_kordinat='$_GET[id]'");
	header('location:../../media.php?module='.$module);
}

if($module=='kordinat' AND $act=='input' ){
  
	mysql_query("insert into tabel_kordinat set id_kordinat='$_POST[id]', 
												id_instansi='$_POST[nama]',
												kordinat='$_POST[kordinat]'
											  ");
	
	header('location:../../media.php?module='.$module);
	
}

elseif($module=='kordinat' AND $act=='edit' ){
  
	mysql_query("update tabel_kordinat set id_instansi='$_POST[nama]',
												kordinat='$_POST[kordinat]'
										where id_kordinat='$_POST[id]'");
	
	header('location:../../media.php?module='.$module);
	
}
?>