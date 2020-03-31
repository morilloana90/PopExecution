
<?php
	 include('php/Connect.php');
	
	$Location = $_POST['Location'];
	$queryD = "SELECT distinct Sub_Categoria FROM AvengersPOPExcecution WHERE (CONCAT(Country,City,Store,Channel,location,site_id) LIKE '%".$Location."%')   ORDER BY Sub_Categoria";
	$resultadoD = $mysqli->query($queryD);
	
	$html= "<option value=''>All Division</option>";
	
	while($rowD = $resultadoD->fetch_assoc())
	{
		$html.= "<option value='".$rowD['Sub_Categoria']."'>".$rowD['Sub_Categoria']."</option>";

	}
	
	echo $html;
	
?>



