<?php
				include "../connection.php";
				if(isset($_POST['instansi'])){
						$instansi=$_POST['instansi'];
						
				}else{
					$instansi="";
				}
				$ambil=mysql_query("select id_instansi, nm_instansi, alamat_instansi, kodepos, kab_instansi, prop_instansi, telpon, foto from tabel_instansi where id_instansi='$instansi'");	
				$t=mysql_fetch_array($ambil);
				echo "
				<br>
				<b><h2>Info $t[nm_instansi]</h2></b>
				<hr>
				<table>
				<tr>
				<td>
				<div class='form-group'>
                    <label class='' for='first-name'>Nama Instansi 
                    </label>
                        <div class=''>
                            $t[nm_instansi]
                        </div>
                </div>
				</td>
				<td>
				<div class='form-group'>
                    <label class='control-label col-xs-2' for='first-name'>
                    </label>
                        <div class='col-xs-10'>
                            
                        </div>
                </div>
				</td>
				<td rowspan='5'>
				<div class='form-group'><p></p>
                    <label class='' for='first-name'>Foto Instansi 
                    </label>
                        <div class=''><br>";
						if($t['foto']==""){
                           echo " <img src='../admin/image_instansi/no.jpg' width='480' height='290'>";
						}else {
                           echo " <img src='../admin/image_instansi/medium_$t[foto]' width='480' height='290'>";
							}
                       echo " </div>
                </div>
				</td>
				</tr>
				<tr>
				<td>
				<div class='form-group'>
                    <label class='' for='first-name'>Alamat Instansi 
                    </label>
                        <div class=''>
                            $t[alamat_instansi]
                        </div>
                </div>
				</td>
				</tr>
				<tr>
				<td>
				<div class='form-group'>
                    <label class='' for='first-name'>Kode Pos
                    </label>
                        <div class=''>
                            $t[kodepos]
                        </div>
                </div>
				</td>
				</tr>
				<tr>
				<td>
				<div class='form-group'>
                    <label class='' for='first-name'>Kabupaten
                    </label>
                        <div class=''>
                            $t[kab_instansi]
                        </div>
                </div>
				</td>
				</tr>
				<tr>
				<td>
				<div class='form-group'>
                    <label class='' for='first-name'>Provinsi
                    </label>
                        <div class=''>
                            $t[prop_instansi]
                        </div>
                </div>
				</td>
				</tr>
				<tr>
				<td>
				<div class='form-group'>
                    <label class='' for='first-name'>Telepon
                    </label>
                        <div class=''>
                            $t[telpon]
                        </div>
                </div>
				</td>
				</tr>
				</table>
				"; 
				
					?>