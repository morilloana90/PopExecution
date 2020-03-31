include('php/Connect.php');

function Buscar(Buscar){

    if (buscar==0){
        
           
            
       $where="";

       
$query = "SELECT Foto1,Foto2,Foto3,Country,Store,Location,Route,Foto4,Channel,ProductGroup,Week_Route,City,Sub_Categoria FROM AvengersPOPExcecution order by week_route,country desc limit 50";
$resultado = $mysqli->query($query);
$row = $resultado->fetch_array(MYSQLI_ASSOC);
$Country = $row['Country'];
$City = $row['City'];
$Location = $row['Location'];
$ProductGroup = $row['ProductGroup'];
$Week_Route = $row['Week_Route'];
$Channel = $row['Channel'];

$queryE = "SELECT  distinct Country FROM AvengersPOPExcecution  ORDER BY Country ";
$resultadoE = $mysqli->query($queryE);

$queryM = "SELECT distinct City FROM AvengersPOPExcecution   ORDER BY City";
$resultadoM = $mysqli->query($queryM);

$queryL = "SELECT distinct Location FROM AvengersPOPExcecution  ORDER BY Location";
$resultadoL = $mysqli->query($queryL);

$queryP = "SELECT distinct ProductGroup FROM AvengersPOPExcecution  ORDER BY ProductGroup";
$resultadoP = $mysqli->query($queryP);

$queryW = "SELECT distinct Week_Route FROM AvengersPOPExcecution  ORDER BY Week_Route";
$resultadoW = $mysqli->query($queryW);

$queryS = "SELECT distinct Store FROM AvengersPOPExcecution  ORDER BY Store";
$resultadoS = $mysqli->query($queryS);

$queryD = "SELECT distinct Sub_Categoria FROM AvengersPOPExcecution  ORDER BY Sub_Categoria";
$resultadoD = $mysqli->query($queryD);

$queryCh = "SELECT distinct Channel FROM AvengersPOPExcecution  ORDER BY Channel";
$resultadoCh = $mysqli->query($queryCh);


$query1="SELECT distinct Foto1,Foto2,Foto3,Country,Store,Location,Route,Channel,Foto4,ProductGroup,Week_Route,City,Sub_Categoria FROM AvengersPOPExcecution where ".$where." 
order by Week_Route,Country,route,store desc limit 50 ";
          

    }


else {
	   

 if (!empty($_POST['xbuscar'])) 
 {
	 $Buscador=$_POST['xbuscar'];             

	 $where=" (CONCAT(Country,City,Store,Location,ProductGroup,Week_Route,channel) LIKE '%".$Buscador."%') limit 50  ";
     $query1="SELECT distinct Foto1,Foto2,Foto3,Country,Store,Location,Route,Channel,Foto4,ProductGroup,Week_Route,City,Sub_Categoria FROM AvengersPOPExcecution where ".$where." 
     order by Week_Route,Country,route,store desc limit 50 ";				 
 

}
$.ajax ({
type:"POST",
url:"formulario.php";
data:cadena,
success:function(r){
    $('#formulario').html(r);
},
error:function(r){
    alertify.error("Error")
}
});



})

}

