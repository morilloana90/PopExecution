
<?php
	 include('php/Connect.php');
	
	$City =$_POST['City']  ;
	
	
	
	$queryCh = "SELECT distinct Channel FROM AvengersPOPExcecution WHERE (CONCAT(Channel,Country,City,Store,location,site_id) LIKE '%".$City."%')  ORDER BY Location";
	$resultadoCh = $mysqli->query($queryCh);
	
	$html= "<option value=''>All Channel Categories</option>";

	while($rowCh = $resultadoCh->fetch_assoc())
	{
	
		$html.= "<option value='".$rowCh['Channel']."'>".$rowCh['Channel']."</option>";
	  
		
	}

		
	
	echo $html;

?>



