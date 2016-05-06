<!DOCTYPE html>


    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SIG Instansi Kendari</title>

        <!-- Bootstrap Core CSS -->
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Font Awesome CSS -->
        <link href="../css/font-awesome.min.css" rel="stylesheet">
		
		<!-- Custom CSS -->
        <link href="../css/animate.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/style2.css" rel="stylesheet">

       


        <!-- Template js -->
        <script src="../js/jquery-2.1.1.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../js/jquery.appear.js"></script>
        <script src="../js/contact_me.js"></script>
        <script src="../js/jqBootstrapValidation.js"></script>
        <script src="../js/modernizr.custom.js"></script>
        <script src="../js/script.js"></script>

    </head>
    
    <body>
			<div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Daftar Instansi Kendari</h3>
                            <p>Informasi Instansi di Kota Kendari Sulawesi Tenggara</p>
							<hr>
                        </div>
                    </div>
                    <div class="row">
					<?php
					include "../connection.php";
					echo "<form class='form-inline' action='index.php' method='POST'>
		
						<select class='form-control' name='instansi'>
							<option>Pilih Instansi</option>";
							$nam=mysql_query("select a.id_kordinat, a.id_instansi, a.kordinat, b.id_instansi, b.nm_instansi from tabel_kordinat a, tabel_instansi b where a.id_instansi=b.id_instansi");
							while($n=mysql_fetch_array($nam)){
							echo "<option value='$n[id_instansi]'>$n[nm_instansi]</option>";
							}
							echo "</select>
  
  
 
				<button type='submit' class='btn btn-success'>Info</button>
				<button type='reset' class='btn btn-danger' onclick=\"window.location='../'\">Kembali</button>
				</form> 

				";
				?>
				
				<div >
							<?php
							
							include "isi.php";
							
							
							?>
						</div>

                        
                        
                    </div><!-- /.row -->
                </div>