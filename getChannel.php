
<?php
	 include('php/Connect.php');
	
	$City =$_POST['City']  ;
	
	
	
	$queryCh = "SELECT distinct Country,City,Channel FROM AvengersPOPExcecution WHERE (CONCAT(Channel,Country,City,location,site_id) LIKE '%".$City."%')  ORDER BY Location";
	$resultadoCh = $mysqli->query($queryCh);
	
	$html= "<option value=''>All Channel Categories</option>";
	
	while($rowCh = $resultadoCh->fetch_assoc())
	{
	
		$html.= "<option value='".$rowCh['Channel']."".$rowCh['Country']."".$rowCh['City']."".$rowCh['Store']."'>".$rowCh['Channel']."</option>";
	  
		
	}
	
	echo $html;

?>



