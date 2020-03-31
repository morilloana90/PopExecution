
<?php
	 include('php/Connect.php');
	
	$City =$_POST['City']  ;

	
	
	
	$queryC = "SELECT distinct Country FROM AvengersPOPExcecution WHERE CONCAT(Channel,Country,City,Store,location,site_id) like '%".$City."%'  ORDER BY Country";
	$resultadoC = $mysqli->query($queryC);
	


	while($rowC = $resultadoC->fetch_assoc())
	{
	
		$html.= "<option value='".$rowC['Country']."'>".$rowC['Country']."</option>";
	  
		
	}

	$queryMM = "SELECT distinct Country FROM AvengersPOPExcecution  ORDER BY  Country  ";
	$resultadoMM = $mysqli->query($queryMM);
	$html.= "<option value=''>All Countries</option>";

	while($rowMM = $resultadoMM->fetch_assoc())
	{
		
		$html.= "<option value='".$rowMM['Country']."'>".$rowMM['Country']."</option>";
			
	
	}
	
	
	echo $html;

?>

