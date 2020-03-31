<?php

include('php/Connect.php');


$where='';

if(!empty($_POST['xbuscar'])) 
{
    $Buscador=$_POST['xbuscar'];             

    $where=" (CONCAT(Country,City,Store,Location,ProductGroup,Week_Route) LIKE '%".$Buscador."%')  ";
                    
}


$query1="SELECT distinct Foto1,Foto2,Foto3,Country,Store,Location,Route,Foto4,ProductGroup,Week_Route,City,Sub_Categoria FROM AvengersPOPExcecution where ".$where." 
order by Week_Route,Country,route,store limit 50 ";
$resultado1 = $mysqli->query($query1);




include('formulario.php');


<?