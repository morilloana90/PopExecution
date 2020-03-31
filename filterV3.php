<?php

	 
     $where="";

     ////////////////////// BOTON BUSCAR //////////////////////////////////////

    

      if (isset($_POST['Search']))
     {	   
   
      if (!empty($_POST['xbuscar'])) 
      {
          $Buscador=$_POST['xbuscar'];             

          $where=" (CONCAT(Country,City,Store,Location,ProductGroup,Week_Route,channel) LIKE '%".$Buscador."%') limit 50  ";
                          
      }

     
       }

   
     
       if (isset($_POST['Hola']))
       {


        

        
              If (!empty($_POST['cbx_Location']) and !empty($_POST['cbx_Country']) and empty($_POST['cbx_City']))  {
               $Location=$_POST['cbx_Location']; 
               $Country=$_POST['cbx_Country'];   
               $where=" CONCAT(Country,City,Store,Location) LIKE '%".$Location."%' and  Country='$Country'  ";  
               } 
               elseif (!empty($_POST['cbx_Location']) and empty($_POST['cbx_Country']) and  empty($_POST['cbx_City']) ) 
               {
                $Location=$_POST['cbx_Location']; 
                $where=" Location LIKE '%".$Location."%'  ";  

               }
               elseif (!empty($_POST['cbx_Store']) and !empty($_POST['cbx_Country']) and !empty($_POST['cbx_City']) ) 
               {
                $Store=$_POST['cbx_Store'];   
                $Country=$_POST['cbx_Country']; 
                $City=  $_POST['cbx_City'];
                $where=" (CONCAT(Country,City,Store) LIKE '%".$Store."%' and  (CONCAT(Country,City) LIKE '%".$City."%') ) ";   
               }
               elseif (!empty($_POST['cbx_Store']) and !empty($_POST['cbx_Country']) and empty($_POST['cbx_City']) and) 
               {
                $Store=$_POST['cbx_Store'];   
                $Country=$_POST['cbx_Country']; 
                $where=" (CONCAT(Country,City,Store) LIKE '%".$Store."%' and  Country='$Country' ) ";   
               }
              elseif (!empty($_POST['cbx_Store']) and empty($_POST['cbx_Country']) ) 
              {
               $Store=$_POST['cbx_Store'];    
               $where=" (CONCAT(Country,City,Store) LIKE '%".$Store."%')  ";   
               }
               elseif (!empty($_POST['cbx_City'])) 
               {
               $City=$_POST['cbx_City'];    
               $where=" (CONCAT(Country,City) LIKE '%".$City."%')  ";   
               }
               elseif  (!empty($_POST['cbx_Country'])) 
                {
                 $Country=$_POST['cbx_Country'];             
                 $where=" Country='$Country' ";
               }
            
            
            
             
            if ((!empty($_POST['cbx_week'])) and empty($_POST['cbx_Country']) and empty($_POST['cbx_City']) and empty($_POST['cbx_Location']) and  empty($_POST['cbx_ProductGroup']) and empty($_POST['cbx_Store']) ) 
            {
        
             $Week_Route=$_POST['cbx_week'];             
             $where=" Week_Route='$Week_Route'";
           } 
           
           elseif ( (!empty($_POST['cbx_week']) and empty($_POST['cbx_ProductGroup']))  
           and ( !empty($_POST['cbx_Country']) or !empty($_POST['cbx_City']) or !empty($_POST['cbx_Store']) or !empty($_POST['cbx_Location'])  )) {
            $Week_Route=$_POST['cbx_week'];             
            $where=$where." and Week_Route='$Week_Route'";
            
           }
           elseif( (!empty($_POST['cbx_week']) and !empty($_POST['cbx_ProductGroup']))  
           and ( !empty($_POST['cbx_Country']) or !empty($_POST['cbx_City']) or !empty($_POST['cbx_Store']) or !empty($_POST['cbx_Location'])  )) {
            $Week_Route=$_POST['cbx_week']; 
            $ProductGroup=$_POST['cbx_ProductGroup'];               
            $where=$where." and Week_Route='$Week_Route' and ProductGroup='".$ProductGroup."' ";
            
           }
           elseif( (!empty($_POST['cbx_week']) and !empty($_POST['cbx_ProductGroup']))  
           and ( empty($_POST['cbx_Country']) or empty($_POST['cbx_City']) or empty($_POST['cbx_Store']) or empty($_POST['cbx_Location'])  )) {
            $Week_Route=$_POST['cbx_week'];  
            $ProductGroup=$_POST['cbx_ProductGroup'];               
            $where=" Week_Route='$Week_Route' and ProductGroup='".$ProductGroup."' ";
            
           }


         if ((!empty($_POST['cbx_ProductGroup'])) and empty($_POST['cbx_Country']) and empty($_POST['cbx_City']) and empty($_POST['cbx_Location']) and empty($_POST['cbx_week']) and empty($_POST['cbx_Store']) ) 
        {
            $ProductGroup=$_POST['cbx_ProductGroup'];             
            $where=" ProductGroup='".$ProductGroup."'";          
        }
        elseif(( !empty($_POST['cbx_ProductGroup']) and empty($_POST['cbx_week'])  )  
           and ( !empty($_POST['cbx_Country']) or !empty($_POST['cbx_City']) or !empty($_POST['cbx_Store']) or !empty($_POST['cbx_Location'])  )) {
            $ProductGroup=$_POST['cbx_ProductGroup'];               
            $where=$where." and  ProductGroup='".$ProductGroup."' ";
            
           }



           if (   !empty($_POST['cbx_Division'])  and  (empty($_POST['cbx_ProductGroup'])) and empty($_POST['cbx_Country']) and empty($_POST['cbx_City']) and empty($_POST['cbx_Location']) and empty($_POST['cbx_week']) and empty($_POST['cbx_Store']) ) 
           {
               $Division=$_POST['cbx_Division'];             
               $where=" Sub_Categoria='".$Division."'";          
           }
           elseif(( !empty($_POST['cbx_Division']) and empty($_POST['cbx_week'])  )and ( !empty($_POST['cbx_Country']) or !empty($_POST['cbx_City']) or !empty($_POST['cbx_Store']) or !empty($_POST['cbx_Location'])  )) {
               $Division=$_POST['cbx_Division'];               
               $where=$where." and  Sub_Categoria='".$Division."' ";
               
              }


            



       
     }
  
  




     ////////FILTROS//////////
   
   $query = "SELECT Foto1,Foto2,Foto3,Country,Store,Location,Route,Foto4,Channel,ProductGroup,Week_Route,City,Sub_Categoria FROM AvengersPOPExcecution order by week_route,country desc limit 50";
   $resultado = $mysqli->query($query);
   


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

   /////////////////////// CONSULTA A LA BASE DE DATOS ////////////////////////


$query1="SELECT distinct Foto1,Foto2,Foto3,Country,Store,Location,Route,Foto4,ProductGroup,Week_Route,Channel,City,Sub_Categoria FROM AvengersPOPExcecution where ".$where." 
order by Week_Route,Country,route,store desc limit 50 ";

$resultado2 = $mysqli->query($query1); 
               
if($resultado2){ 

$row = $resultado2->fetch_array(MYSQLI_ASSOC);

if (!empty($_POST['cbx_Division'])) {
  $Division=$row['Sub_Categoria'];
 }
else{
  $Division="";
}
if (!empty($_POST['cbx_Channel'])) {
  $Channel=$row['Channel'];
 }
else{
  $Channel="";
}
if (!empty($_POST['cbx_Store'])) {
  $Store=$row['Store'];
 }
else{
  $Store="";
}
if (!empty($_POST['cbx_Location'])) {
  $Location=$row['Location'];
 }
else{
  $Location="";
}

if (!empty($_POST['cbx_Country'])) {
  $Country=$row['Country'];
 }
else{
  $Country="";
}
if (!empty($_POST['cbx_City'])) {
  $City=$row['City'];
 }
else{
  $City="";
}
if (!empty($_POST['cbx_ProductGroup'])) {
  $ProductGroup=$row['ProductGroup'];
 }
else{
  $ProductGroup="";
}
if (!empty($_POST['cbx_week'])) {
  $Week_Route=$row['Week_Route'];
 }
else{
  $Week_Route="";
}





  echo $where;
  
}


else
{
$where="";
$query1="SELECT distinct Foto1,Foto2,Foto3,Country,Store,Location,Route,Foto4,ProductGroup,Week_Route,Channel,City,Sub_Categoria FROM AvengersPOPExcecution ".$where." 
order by Week_Route,Country,route,store desc  limit 50 ";
$resultado2 = $mysqli->query($query1);
$row = $resultado2->fetch_array();
$Division="";
$Store="";
$Country="";
$Location="";
$Channel="";
$City="";
$Week_Route="";
$ProductGroup="";


}     

?>

