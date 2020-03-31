<?php

	 
     $where="";

     ////////////////////// BOTON BUSCAR //////////////////////////////////////



      if (isset($_POST['Buscador']))
     {	   
   
        if (!empty($_POST['Buscador'])) 
        {
            $Buscador=$_POST['Buscador'];             

            $where="WHERE (CONCAT(ProductGroup,Location,Country,City,Week_Prodcut) LIKE '%".$Buscador."%')  ";
                            
        }

     
       }


   
     if (isset($_POST['Buscar']))
     {	   
   

           if (!empty($_POST['cbx_Country'])) 
           {
               $Country=$_POST['cbx_Country'];             

               $where="WHERE Country='$Country' ";
                               
           }

           if (!empty($_POST['cbx_City'])) 
           {
               $City=$_POST['cbx_City'];    
               $Country="";           

               $where="WHERE (CONCAT(City,Country) LIKE '%".$City."%')  ";                
           }

           if (!empty($_POST['cbx_Location'])) 
           {
               $Location=$_POST['cbx_Location'];   
               $Country="";           
          

               $where="WHERE (CONCAT(Location,Country,City) LIKE '%".$Location."%')  ";                
           }

           if (!empty($_POST['cbx_ProductGroup'])) 
           {
               $ProductGroup=$_POST['cbx_ProductGroup'];             
            
             

               $where="WHERE (CONCAT(ProductGroup,Location,Country,City) LIKE '%".$ProductGroup."%')";          
           }

    
     
   }





     ////////FILTROS//////////
   
   $query = "SELECT Foto1,Foto2,Foto3,Country,Store,Location,Route,Foto4,ProductGroup,Week_Route,City FROM AvengersPOPExcecution limit 50";
   $resultado = $mysqli->query($query);
   $row = $resultado->fetch_array(MYSQLI_ASSOC);
   $Country = $row['Country'];
   $City = $row['City'];
   $Location = $row['Location'];
   $ProductGroup = $row['ProductGroup'];
   $Week_Route = $row['Week_Route'];

   $queryE = "SELECT  distinct Country FROM AvengersPOPExcecution  ORDER BY Country ";
   $resultadoE = $mysqli->query($queryE);
   
   $queryM = "SELECT distinct City FROM AvengersPOPExcecution   ORDER BY City";
   $resultadoM = $mysqli->query($queryM);
   
   $queryL = "SELECT distinct Location FROM AvengersPOPExcecution  ORDER BY Location";
   $resultadoL = $mysqli->query($queryL);

   $queryP = "SELECT distinct ProductGroup FROM AvengersPOPExcecution  ORDER BY ProductGroup";
   $resultadoP = $mysqli->query($queryP);

   $queryW = "SELECT distinct Week_Route FROM AvengersPOPExcecution  ORDER BY Location";
   $resultadoW = $mysqli->query($queryW);

   /////////////////////// CONSULTA A LA BASE DE DATOS ////////////////////////


$query1="SELECT distinct Foto1,Foto2,Foto3,Country,Store,Location,Route,Foto4,ProductGroup,Week_Route,City FROM AvengersPOPExcecution where 
".$where." order by Week_Route,Country,route,store limit 50 ";
$resultado1 = $mysqli->query($query1);


if(!$resultado1)
{
$where="";
$query1="SELECT distinct Foto1,Foto2,Foto3,Country,Store,Location,Route,Foto4,ProductGroup,Week_Route,City FROM AvengersPOPExcecution ".$where." limit 50";
$resultado1 = $mysqli->query($query1);
}             
     
?>