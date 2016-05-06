<?php

include "config/connection.php";
$instansi=mysql_query("select * from tabel_instansi");
$p=mysql_num_rows($instansi);

$kordinat=mysql_query("select * from tabel_kordinat");
$o=mysql_num_rows($kordinat);

echo "<div class='row'>
                <div class='col-lg-12'>
                    <h1 class='page-header'>Beranda</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class='row'>
                
                <div class='col-lg-3 col-md-6'>
                    <div class='panel panel-green'>
                        <div class='panel-heading'>
                            <div class='row'>
                                <div class='col-xs-3'>
                                    <i class='fa fa-university fa-5x'></i>
                                </div>
                                <div class='col-xs-9 text-right'>
                                    <div class='huge'>";
									
									echo" $p</div>
                                    <div>Data Instansi</div>
                                </div>
                            </div>
                        </div>
                        <a href='#'>
                            <div class='panel-footer'>
                                <span class='pull-left'><a href='?module=instansi'>Lihat Data</a></span>
                                
                                <div class='clearfix'></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class='col-lg-3 col-md-6'>
                    <div class='panel panel-yellow'>
                        <div class='panel-heading'>
                            <div class='row'>
                                <div class='col-xs-3'>
                                    <i class='fa fa-map-marker fa-5x'></i>
                                </div>
                                <div class='col-xs-9 text-right'>
                                    <div class='huge'>";
									
									echo " $o</div>
                                    <div>Data Kordinat</div>
                                </div>
                            </div>
                        </div>
                        <a href='#'>
                            <div class='panel-footer'>
                                <span class='pull-left'><a href='?module=kordinat'>Lihat Data</a></span>
                                
                                <div class='clearfix'></div>
                            </div>
                        </a>
                    </div>
                </div>
                
            </div>
            <!-- /.row -->
			
			";
?>