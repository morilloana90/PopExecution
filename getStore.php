
<?php
	 include('php/Connect.php');
	
	$Country =$_POST['Country']  ;
	
	
	
	$queryS = "SELECT distinct Country,City,Store  FROM AvengersPOPExcecution WHERE (CONCAT(Channel,Country,City,Store,location,site_id) LIKE '%".$Country."%')  ORDER BY Location";
	$resultadoS = $mysqli->query($queryS);
	
	$html= "<option value=''>All Channels</option>";
	
	while($rowS = $resultadoS->fetch_assoc())
	{
	
		$html.= "<option value='".$rowS['City']."".$rowS['Store']."'>".$rowS['Store']."</option>";
	  
		
	}
	
	echo $html;


	

?>



