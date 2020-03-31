
<?php
	 include('php/Connect.php');

	$Country = $_POST['Country'];
	
	
	$queryM = "SELECT distinct Country,City FROM AvengersPOPExcecution WHERE CONCAT(Channel,Country,City,Store,location,site_id) like'%".$Country."%' ORDER BY city";
	$resultadoM = $mysqli->query($queryM);
	
	
	
	while($rowM = $resultadoM->fetch_assoc())
	{
		
		$html.= "<option value='".$rowM['Country']."".$rowM['City']."'>".$rowM['City']."</option>";
			
	
	}

	$html.= "<option value=''>All Cities</option>";
		
	$queryMM = "SELECT distinct Country,City FROM AvengersPOPExcecution  ORDER BY city";
	$resultadoMM = $mysqli->query($queryM);
	
	
	
	while($rowMM = $resultadoMM->fetch_assoc())
	{
		
		$html.= "<option value='".$rowMM['Country']."".$rowMM['City']."'>".$rowMM['City']."</option>";
			
	
	}
	

	echo $html;
	
	?>