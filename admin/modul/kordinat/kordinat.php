<?php

$aksi="modul/kordinat/aksi_kordinat.php";
include "config/kode_auto.php";
switch($_GET[act]){
	default:
	$tampil=mysql_query("select a.id_kordinat, a.id_instansi, a.kordinat, b.id_instansi, b.nm_instansi from tabel_kordinat a, tabel_instansi b where a.id_instansi=b.id_instansi order by id_kordinat ASC");
	echo "
	<div class='row'>
                <div class='col-lg-12'>
                    <h1 class='page-header'>Data Kordinat</h1>
                </div>
                <!-- /.col-lg-12 -->
	</div>
	<div>
	<b><input type=button class=\"btn btn-success\" value='Tambah Data' onclick=\"window.location.href='?module=kordinat&act=input';\"></b>
	</div>
	<br>
	

		
		<div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            DataTables Advanced Tables
                        </div>
                        <!-- /.panel-heading -->
                        <div class='panel-body'>
                            <div class='dataTable_wrapper'>
                                <table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Instansi</th>
                                            <th>Kordinat</th>
                                            
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>";
  $no=1;
  while($dt=mysql_fetch_array($tampil)){
  echo "	
                <tr class='odd gradeX'>
					<td>$no</td>
					<td>$dt[nm_instansi]</td>
					<td>$dt[kordinat]</td>
					
					
					<td>
					<span><a href='?module=kordinat&act=edit&id=$dt[id_kordinat]'><img src='images/edit-small.png'></a>  </span>
					<span><a href=\"$aksi?module=kordinat&act=hapus&id=$dt[id_kordinat]\" onClick=\"return confirm('Apakah Anda benar-benar mau menghapusnya?')\">  <img src='images/delete-small.png'></a></span>
					</td>
                </tr>
            ";
  $no++;
  }
echo "</tbody>
                                </table>
                            </div>
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

	";
	
	break;
	
	case "input":
	echo "
					<div class='row'>	
                        <div class='col-md-12 col-sm-12 col-xs-12'>
                            <div class='x_panel'>
                                <div class='x_title'>
                                    <h2>Form Input Data Kordinat</h2>
                                    
                                    <div class='clearfix'></div>
                                </div>
                                <div class='x_content'>
                                    <br />
                                    <form action='$aksi?module=kordinat&act=input' method='post' id='demo-form2' data-parsley-validate class='form-horizontal form-label-left'>

                                        <div class='form-group'>
                                            <label class='control-label col-md-3 col-sm-3 col-xs-12' for='first-name'>ID kordinat <span class='required'>*</span>
                                            </label>
                                            <div class='col-md-6 col-sm-6 col-xs-12'>
                                                <input type='text' id='first-name' name='id' required='required' class='form-control col-md-7 col-xs-12' value=".kdauto(tabel_kordinat,KOR)." readonly>
                                            </div>
                                        </div>
                                        <div class='form-group'>
                                            <label class='control-label col-md-3 col-sm-3 col-xs-12'>Nama Instansi <span class='required'>*</span>
                                            </label>
                                            <div class='col-md-6 col-sm-6 col-xs-12'>
                                                <select class='form-control' name='nama'>
                                                    <option>Pilih Instansi</option>";
													$nam=mysql_query("select id_instansi, nm_instansi from tabel_instansi");
													while($n=mysql_fetch_array($nam)){
                                                    echo "<option value='$n[id_instansi]'>$n[nm_instansi]</option>";
                                                    }
                                                echo "</select>
                                            </div>
                                        </div>
                                       <div class='form-group'>
                                            <label class='control-label col-md-3 col-sm-3 col-xs-12' for='last-name'>Kordinat <span class='required'>*</span>
                                            </label>
                                            <div class='col-md-6 col-sm-6 col-xs-12'>
                                                <input type='text' id='last-name' name='kordinat' placeholder='Kordinat' required='required' class='form-control col-md-7 col-xs-12'>
                                            </div>
                                        </div>
										
										
                                        <div class='ln_solid'></div>
                                        <div class='form-group'>
                                            <div class='col-md-6 col-sm-6 col-xs-12 col-md-offset-3'>
                                                <button type='reset' class='btn btn-primary' onclick=self.history.back()>Batal</button>
                                                <button type='submit' class='btn btn-success'>Input</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                   </div> ";
	break;
	
	case "edit":
	$ambil=mysql_query("select a.id_kordinat, a.id_instansi, a.kordinat, b.id_instansi, b.nm_instansi from tabel_kordinat a, tabel_instansi b where a.id_instansi=b.id_instansi and id_kordinat='$_GET[id]'");
	$t=mysql_fetch_array($ambil);
	echo "
	
	<div class='row'>	
                        <div class='col-md-12 col-sm-12 col-xs-12'>
                            <div class='x_panel'>
                                <div class='x_title'>
                                    <h2>Form Edit Data Kordinat</h2>
                                    
                                    <div class='clearfix'></div>
                                </div>
                                <div class='x_content'>
                                    <br />
                                    <form action='$aksi?module=kordinat&act=edit' method='post' id='demo-form2' data-parsley-validate class='form-horizontal form-label-left'>

                                        <div class='form-group'>
                                            <label class='control-label col-md-3 col-sm-3 col-xs-12' for='first-name'>ID kordinat <span class='required'>*</span>
                                            </label>
                                            <div class='col-md-6 col-sm-6 col-xs-12'>
                                                <input type='text' id='first-name' name='id' required='required' class='form-control col-md-7 col-xs-12' value='$t[id_kordinat]' readonly>
                                            </div>
                                        </div>
                                        <div class='form-group'>
                                            <label class='control-label col-md-3 col-sm-3 col-xs-12'>Nama Instansi <span class='required'>*</span>
                                            </label>
                                            <div class='col-md-6 col-sm-6 col-xs-12'>
                                                <select class='form-control' name='nama'>
                                                    <option>Pilih instansi</option>";
													
													$nam=mysql_query("select id_instansi, nm_instansi from tabel_instansi");
													while($j=mysql_fetch_array($nam)){
													if($t['id_instansi']==$j['id_instansi']){
														echo "<option value='$j[id_instansi]' selected='$t[id_instansi]'>$j[nm_instansi]</option>";
                                                    }
													else{
														echo "<option value='$j[id_instansi]' >$j[nm_instansi]</option>";
													
													}
													
													}
                                                echo "</select>
                                            </div>
                                        </div>
                                       <div class='form-group'>
                                            <label class='control-label col-md-3 col-sm-3 col-xs-12' for='last-name'>Kordinat <span class='required'>*</span>
                                            </label>
                                            <div class='col-md-6 col-sm-6 col-xs-12'>
                                                <input type='text' id='last-name' name='kordinat' value='$t[kordinat]' required='required' class='form-control col-md-7 col-xs-12'>
                                            </div>
                                        </div>
										
                                        
										
                                        <div class='ln_solid'></div>
                                        <div class='form-group'>
                                            <div class='col-md-6 col-sm-6 col-xs-12 col-md-offset-3'>
                                                <button type='reset' class='btn btn-primary' onclick=self.history.back()>Batal</button>
                                                <button type='submit' class='btn btn-success'>Edit</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                   </div>
	";
	break;
}


?>