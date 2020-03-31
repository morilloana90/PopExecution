
<?php
	 include('php/Connect.php');
	
     $city = $_POST['city'];
     $country = $_POST['country'];
     $country = $row['country'];

	$sql = "select * from AvengersPOPExcecution where city = '$city' and country = '$country' and location='$city$' ";
	$resultado = $enlace->query($sql);
	
    
	
	while($rowL = $resultadoL->fetch_assoc())
	{
		$html= "<option value='0'>".$rowL['Location']." ".$rowL['city']." ".$rowL['country']."</option>";
		echo $html;
	}


?>