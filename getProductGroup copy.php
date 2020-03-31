
<?php
	 include('php/Connect.php');
	
	$Location = $_POST['Location'];
	$queryP = "SELECT distinct ProductGroup,location,country,city FROM AvengersPOPExcecution WHERE (CONCAT(Country,City,site_id) LIKE '%".$Location."%')   ORDER BY Location";
	$resultadoP = $mysqli->query($queryP);
	
	$html= "<option value=''>All ProductGroups</option>";
	
	while($rowP = $resultadoP->fetch_assoc())
	{
		$html.= "<option value='".$rowP['Country']."".$rowP['City']."".$rowP['Location']."".$rowP['ProductGroup']."'>".$rowP['ProductGroup']."</option>";
		
	}
	
	echo $html;
	
?>



