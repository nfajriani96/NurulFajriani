<script type="text/javascript" 
           src="http://maps.google.com/maps/api/js?sensor=false"></script>


 <br><br>
 <div class='row'>
 
	<br><br>
	
	<?php
	if(isset($_POST)) {
	
	
	include "../connection.php";
		$ambil=mysql_query("select a.id_kordinat, a.id_instansi, a.kordinat, b.id_instansi, b.nm_instansi from tabel_kordinat a, tabel_instansi b where a.id_instansi=b.id_instansi and kordinat='$_POST[asal]'");	
		$t=mysql_fetch_array($ambil);
		$ambiljuga=mysql_query("select a.id_kordinat, a.id_instansi, a.kordinat, b.id_instansi, b.nm_instansi from tabel_kordinat a, tabel_instansi b where a.id_instansi=b.id_instansi and kordinat='$_POST[tujuan]'");	
		$u=mysql_fetch_array($ambiljuga);
		
		echo " 
		<center>Rute <img src='../images/marker.png'> <b>$t[nm_instansi]</b> menuju <img src='../images/marker3.png'> <b>$u[nm_instansi]</b> </center>";
			}?>
	
 	 <div id="panel"   style="width: 300px; float:left;"></div> 
     <div id="map"      style="width: 600px; height: 300px; float:right;"></div> 
   
</div>
  

   <script type="text/javascript"> 

     var directionsService = new google.maps.DirectionsService();
     var directionsDisplay = new google.maps.DirectionsRenderer();

     var map = new google.maps.Map(document.getElementById('map'), {
       zoom:10,
       mapTypeId: google.maps.MapTypeId.ROADMAP
     });

     directionsDisplay.setMap(map);
     directionsDisplay.setPanel(document.getElementById('panel'));

     var request = {
       origin: '<?=$saddr;?>', 
       destination: '<?=$daddr;?>',
       travelMode: google.maps.DirectionsTravelMode.DRIVING
     };

     directionsService.route(request, function(response, status) {
       if (status == google.maps.DirectionsStatus.OK) {
         directionsDisplay.setDirections(response);
       }
     });
   </script> 
</body> 
