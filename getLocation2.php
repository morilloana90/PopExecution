
<?php
	 include('php/Connect.php');
	
	$City =$_POST['City']  ;
	
	
	
	$queryL = "SELECT distinct Location,site_id  FROM AvengersPOPExcecution WHERE (CONCAT(Channel,Country,City,Store) LIKE '%".$City."%')  ORDER BY Location";
	$resultadoL = $mysqli->query($queryL);
	
	$html= "<option value=''>All Store</option>";
	
	while($rowL = $resultadoL->fetch_assoc())
	{
	
		$html.= "<option value='".$rowL['site_id']."'>".$rowL['Location']."-".$rowL['site_id']."</option>";
	  
		
	}
	
	echo $html;

?>



