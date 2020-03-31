
<?php
	 include('php/Connect.php');
	
	$Country =$_POST['Country']  ;
	
	
	
	$queryS = "SELECT distinct Store  FROM AvengersPOPExcecution WHERE (CONCAT(Country,City,Store,location,site_id) LIKE '%".$Country."%')  ORDER BY Store";
	$resultadoS = $mysqli->query($queryS);
	

	
	while($rowS = $resultadoS->fetch_assoc())
	{
	
		$html.= "<option value='".$rowS['Store']."'>".$rowS['Store']."</option>";
	  
		
	}

	$html.= "<option value=''>All Channels</option>";

	
	echo $html;

?>



