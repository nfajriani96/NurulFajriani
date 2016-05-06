<?php

$aksi="modul/instansi/aksi_instansi.php";
include "config/kode_auto.php";


switch($_GET[act]){
	default:
	$tampil=mysql_query("select id_instansi, nm_instansi, alamat_instansi, kodepos, kab_instansi, prop_instansi, telpon from tabel_instansi order by id_instansi ASC");
	echo "
	<div class='row'>
                <div class='col-lg-12'>
                    <h1 class='page-header'>Data Instansi</h1>
                </div>
                <!-- /.col-lg-12 -->
	</div>
	<div>
	<b><input type=button class=\"btn btn-success\" value='Tambah Data' onclick=\"window.location.href='?module=instansi&act=input';\"></b>
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
                                            <th>Alamat</th>
                                            <th>Telpon</th>
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
					<td>$dt[alamat_instansi]</td>
					<td>$dt[telpon]</td>
					
					<td>
					<span><a href='?module=instansi&act=edit&id=$dt[id_instansi]'><img src='images/edit-small.png'></a>  </span>
					<span><a href=\"$aksi?module=instansi&act=hapus&id=$dt[id_instansi]\" onClick=\"return confirm('Apakah Anda benar-benar mau menghapusnya?')\">  <img src='images/delete-small.png'></a></span>
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
                                    <h2>Form Input Data Instansi</h2>
                                    
                                    <div class='clearfix'></div>
                                </div>
                                <div class='x_content'>
                                    <br />
                                    <form action='$aksi?module=instansi&act=input' method='post' id='demo-form2' data-parsley-validate enctype='multipart/form-data' class='form-horizontal form-label-left'>

                                        <div class='form-group'>
                                            <label class='control-label col-md-3 col-sm-3 col-xs-12' for='first-name'>ID instansi <span class='required'>*</span>
                                            </label>
                                            <div class='col-md-6 col-sm-6 col-xs-12'>
                                                <input type='text' id='first-name' name='id' required='required' class='form-control col-md-7 col-xs-12' value=".kdauto(tabel_instansi,INS)." readonly>
                                            </div>
                                        </div>
                                        <div class='form-group'>
                                            <label class='control-label col-md-3 col-sm-3 col-xs-12' for='last-name'>Nama instansi <span class='required'>*</span>
                                            </label>
                                            <div class='col-md-6 col-sm-6 col-xs-12'>
                                                <input type='text' id='last-name' name='nama' placeholder='Nama instansi' required='required' class='form-control col-md-7 col-xs-12'>
                                            </div>
                                        </div>
                                       <div class='form-group'>
                                            <label class='control-label col-md-3 col-sm-3 col-xs-12' for='last-name'>Alamat <span class='required'>*</span>
                                            </label>
                                            <div class='col-md-6 col-sm-6 col-xs-12'>
                                                <input type='text' id='last-name' name='alamat' placeholder='Alamat instansi' required='required' class='form-control col-md-7 col-xs-12'>
                                            </div>
                                        </div>
										<div class='form-group'>
                                            <label class='control-label col-md-3 col-sm-3 col-xs-12' for='last-name'>Kode Pos <span class='required'>*</span>
                                            </label>
                                            <div class='col-md-6 col-sm-6 col-xs-12'>
                                                <input type='text' id='last-name' name='kode' placeholder='Kode Pos' required='required' class='form-control col-md-7 col-xs-12'>
                                            </div>
                                        </div>
										<div class='form-group'>
                                            <label class='control-label col-md-3 col-sm-3 col-xs-12' for='last-name'>Kabupaten instansi <span class='required'>*</span>
                                            </label>
                                            <div class='col-md-6 col-sm-6 col-xs-12'>
                                                <input type='text' id='last-name' name='kab' placeholder='Kabupaten instansi' required='required' class='form-control col-md-7 col-xs-12'>
                                            </div>
                                        </div>
										<div class='form-group'>
                                            <label class='control-label col-md-3 col-sm-3 col-xs-12' for='last-name'>Provinsi instansi <span class='required'>*</span>
                                            </label>
                                            <div class='col-md-6 col-sm-6 col-xs-12'>
                                                <input type='text' id='last-name' name='prov' placeholder='Provinsi instansi' required='required' class='form-control col-md-7 col-xs-12'>
                                            </div>
                                        </div>
										<div class='form-group'>
                                            <label class='control-label col-md-3 col-sm-3 col-xs-12' for='last-name'>Telepon instansi <span class='required'>*</span>
                                            </label>
                                            <div class='col-md-6 col-sm-6 col-xs-12'>
                                                <input type='text' id='last-name' name='telp' placeholder='Nomor Telepon' required='required' class='form-control col-md-7 col-xs-12'>
                                            </div>
                                        </div>
										<div class='form-group'>
                                            <label class='control-label col-md-3 col-sm-3 col-xs-12' for='last-name'>Foto Instansi <span class='required'>*</span>
                                            </label>
                                            <div class='col-md-6 col-sm-6 col-xs-12'>
                                                <input type=file name='fupload' placeholder='Image File' class='form-control col-md-7 col-xs-12'>
                                            </div>
                                        </div>
										
										
                                        <div class='ln_solid'></div>
                                        <div class='form-group'>
                                            <div class='col-md-6 col-sm-6 col-xs-12 col-md-offset-3'>
                                                <button type='reset' class='btn btn-primary' onclick=self.history.back()>Batal</button>
                                                <button type='submit' class='btn btn-success' >Input</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                   </div> ";
	break;
	
	case "edit":
	$ambil=mysql_query("select id_instansi, nm_instansi, alamat_instansi, kodepos, kab_instansi, prop_instansi, telpon, foto from tabel_instansi where id_instansi='$_GET[id]'");
	$t=mysql_fetch_array($ambil);
	echo "
	
	<div class='row'>	
                        <div class='col-md-12 col-sm-12 col-xs-12'>
                            <div class='x_panel'>
                                <div class='x_title'>
                                    <h2>Form Edit Data instansi</h2>
                                    
                                    <div class='clearfix'></div>
                                </div>
                                <div class='x_content'>
                                    <br />
                                    <form action='$aksi?module=instansi&act=edit' method='post' id='demo-form2' data-parsley-validate enctype='multipart/form-data' class='form-horizontal form-label-left'>

                                        <div class='form-group'>
                                            <label class='control-label col-md-3 col-sm-3 col-xs-12' for='first-name'>ID instansi <span class='required'>*</span>
                                            </label>
                                            <div class='col-md-6 col-sm-6 col-xs-12'>
                                                <input type='text' id='first-name' name='id' required='required' class='form-control col-md-7 col-xs-12' value='$t[id_instansi]' readonly>
                                            </div>
                                        </div>
                                        <div class='form-group'>
                                            <label class='control-label col-md-3 col-sm-3 col-xs-12' for='last-name'>Nama instansi <span class='required'>*</span>
                                            </label>
                                            <div class='col-md-6 col-sm-6 col-xs-12'>
                                                <input type='text' id='last-name' name='nama' value='$t[nm_instansi]' required='required' class='form-control col-md-7 col-xs-12'>
                                            </div>
                                        </div>
                                       <div class='form-group'>
                                            <label class='control-label col-md-3 col-sm-3 col-xs-12' for='last-name'>Alamat <span class='required'>*</span>
                                            </label>
                                            <div class='col-md-6 col-sm-6 col-xs-12'>
                                                <input type='text' id='last-name' name='alamat' value='$t[alamat_instansi]' required='required' class='form-control col-md-7 col-xs-12'>
                                            </div>
                                        </div>
										<div class='form-group'>
                                            <label class='control-label col-md-3 col-sm-3 col-xs-12' for='last-name'>Kode Pos <span class='required'>*</span>
                                            </label>
                                            <div class='col-md-6 col-sm-6 col-xs-12'>
                                                <input type='text' id='last-name' name='kode' value='$t[kodepos]' required='required' class='form-control col-md-7 col-xs-12'>
                                            </div>
                                        </div>
										<div class='form-group'>
                                            <label class='control-label col-md-3 col-sm-3 col-xs-12' for='last-name'>Kabupaten instansi <span class='required'>*</span>
                                            </label>
                                            <div class='col-md-6 col-sm-6 col-xs-12'>
                                                <input type='text' id='last-name' name='kab' value='$t[kab_instansi]' required='required' class='form-control col-md-7 col-xs-12'>
                                            </div>
                                        </div>
										<div class='form-group'>
                                            <label class='control-label col-md-3 col-sm-3 col-xs-12' for='last-name'>Provinsi instansi <span class='required'>*</span>
                                            </label>
                                            <div class='col-md-6 col-sm-6 col-xs-12'>
                                                <input type='text' id='last-name' name='prov' value='$t[prop_instansi]' required='required' class='form-control col-md-7 col-xs-12'>
                                            </div>
                                        </div>
										<div class='form-group'>
                                            <label class='control-label col-md-3 col-sm-3 col-xs-12' for='last-name'>Telepon instansi <span class='required'>*</span>
                                            </label>
                                            <div class='col-md-6 col-sm-6 col-xs-12'>
                                                <input type='text' id='last-name' name='telp' value='$t[telpon]' required='required' class='form-control col-md-7 col-xs-12'>
                                            </div>
                                        </div>
										<div class='form-group'>
                                            <label class='control-label col-md-3 col-sm-3 col-xs-12' for='last-name'>Foto Instansi <span class='required'>*</span>
                                            </label>
                                            <div class='col-md-6 col-sm-6 col-xs-12'>";
											if($t[foto]==""){
												echo "<img src='image_instansi/no.jpg' width='300' height='240' />";
											} else {
											echo "<img src='image_instansi/medium_$t[foto]' width='300' height='240' />";
											}
                                                echo"
                                            </div>
                                        </div>
										
										
										<div class='form-group'>
                                            <label class='control-label col-md-3 col-sm-3 col-xs-12' for='last-name'>Ganti Foto <span class='required'>*</span>
                                            </label>
                                            <div class='col-md-6 col-sm-6 col-xs-12'>
                                                <input type='file' id='last-name' name='fupload' placeholder='Image File' required='required' class='form-control col-md-7 col-xs-12'>
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