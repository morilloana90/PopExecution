
<?php
	 include('php/Connect.php');

	$ProductGroup = $_POST['ProductGroup'];
	
	$queryW = "SELECT distinct Week_Route FROM AvengersPOPExcecution WHERE concat(Country,City,Store,Channel,location,site_id,ProductGroup,Sub_Categoria) like '%".$ProductGroup."%' ORDER BY Week_Route desc";
	
	
 	$resultadoW = $mysqli->query($queryW);
	
	$html= "<option value=''>All Week</option>";
	
	while($rowW = $resultadoW->fetch_assoc())
	{
		
		$html.= "<option value='".$rowW['Week_Route']."'>".$rowW['Week_Route']."</option>";
			
	
	}
	
	echo $html;
	
?>