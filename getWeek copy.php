
<?php
	 include('php/Connect.php');

	$ProductGroup = $_POST['ProductGroup'];
	
	$queryW = "SELECT distinct Week_Route,Country,City,ProductGroup,location FROM AvengersPOPExcecution WHERE concat(Country,City,location,site_id,ProductGroup) like '%".$ProductGroup."%' ORDER BY Week_Route";
	
	
 	$resultadoW = $mysqli->query($queryW);
	
	$html= "<option value=''>All Week</option>";
	
	while($rowW = $resultadoW->fetch_assoc())
	{
		
		$html.= "<option value='".$rowW['Country']."".$rowW['City']."".$rowW['Location']."".$rowW['ProductGroup']."".$rowW['Week_Route']."'>Week=".$rowW['Week_Route']." Store=".$rowW['Location']."</option>";
			
	
	}
	
	echo $html;
	
?>