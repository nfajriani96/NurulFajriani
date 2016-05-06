
<?php
include "connection.php";
echo "<form class='form-inline' action='index.php' method='POST'>
		
			<select class='form-control' name='asal'>
                <option>Pilih Instansi</option>";
				$nam=mysql_query("select a.id_kordinat, a.id_instansi, a.kordinat, b.id_instansi, b.nm_instansi from tabel_kordinat a, tabel_instansi b where a.id_instansi=b.id_instansi");
				while($n=mysql_fetch_array($nam)){
                echo "<option value='$n[kordinat]'>$n[nm_instansi]</option>";
                }
                echo "</select>
        
			<select class='form-control' name='tujuan'>
                <option>Pilih Instansi</option>";
				$nam=mysql_query("select a.id_kordinat, a.id_instansi, a.kordinat, b.id_instansi, b.nm_instansi from tabel_kordinat a, tabel_instansi b where a.id_instansi=b.id_instansi");
				while($n=mysql_fetch_array($nam)){
                echo "<option value='$n[kordinat]'>$n[nm_instansi]</option>";
                }
                echo "</select>
  
  
 
		<button type='submit' class='btn btn-warning'>Rute</button>
		</form> 

";
?>