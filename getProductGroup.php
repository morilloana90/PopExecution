
<?php
	 include('php/Connect.php');
	
	$Location = $_POST['Location'];
	$queryP = "SELECT distinct ProductGroup FROM AvengersPOPExcecution WHERE (CONCAT(Channel,Country,City,Store,location,site_id,Sub_Categoria) LIKE '%".$Location."%')   ORDER BY Location";
	$resultadoP = $mysqli->query($queryP);
	
	$html= "<option value=''>All ProductGroups</option>";
	
	while($rowP = $resultadoP->fetch_assoc())
	{
		$html.= "<option value='".$rowP['ProductGroup']."'>".$rowP['ProductGroup']."</option>";
		
	}
	
	echo $html;
	
?>



