
<?php
	 include('php/Connect.php');

	$Country = $_POST['Country'];
	
	
	$queryM = "SELECT distinct Country,City FROM AvengersPOPExcecution WHERE CONCAT(Channel,Country,City,Store,location,site_id) like'%".$Country."%' ORDER BY city";
	$resultadoM = $mysqli->query($queryM);
	
	$html= "<option value=''>All Cities</option>";
	
	while($rowM = $resultadoM->fetch_assoc())
	{
		
		$html.= "<option value='".$rowM['Country']."".$rowM['City']."'>".$rowM['City']."</option>";
			
	
	}


	

	echo $html;
	
	?>