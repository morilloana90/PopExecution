<?php  
          include('php/Connect.php');


              $where="";

              ////////////////////// BOTON BUSCAR //////////////////////////////////////
              
              if (isset($_POST['buscar']))
              {	   
                  
                    if (!empty($_POST['xbuscar'])) 
                    {
                                            
                           $buscar=$_POST['xbuscar'];
                                    
                           $where="WHERE (CONCAT(Country,Store,Location,route,City) LIKE '%".$buscar."%') ";
                                            
                    }

                    if (!empty($_POST['xcountry'])) 
                    {
                        $buscar2=$_POST['xcountry'];             

                        $where="WHERE Country='".$buscar2."' ";
                                        
                    }

                    if (!empty($_POST['xcity'])) 
                    {
                        $buscar2=$_POST['xcity'];             

                        $where="WHERE City='".$buscar2."' ";
                            
                    }

                    if (!empty($_POST['xweek'])) 
                    {
                    $buscar2=$_POST['xweek'];             

                    $where="WHERE Week='".$buscar2."' ";
                                        
                    }

                    if (!empty($_POST['xcountry']) and !empty($_POST['xweek'])) 
                    {
                     $buscar2=$_POST['xweek'];  
                     $buscar3=$_POST['xcountry'];            

                    $where="WHERE Week='".$buscar2."' and country='".$buscar3."'";
                                        
                    }

                    if (!empty($_POST['xcity']) and !empty($_POST['xweek'])) 
                    {
                     $buscar2=$_POST['xweek'];  
                     $buscar3=$_POST['xcity'];            

                    $where="WHERE Week='".$buscar2."' and City='".$buscar3."'";
                                        
                    }

                    
                    if ( !empty($_POST['xchannel'])) 
                    {
                      
                     $buscar3=$_POST['xchannel'];            

                    $where="WHERE Store='".$buscar3."'";
                                        
                    }
                  
                  
                  
              
            }
            /////////////////////// CONSULTA A LA BASE DE DATOS ////////////////////////

$query="SELECT distinct Foto1,Foto2,Foto3,Country,Store,Location,Route,Foto4,ProductGroup,Week,City FROM AvengersPOPExcecution2 ".$where." order by week,country,route,store limit 50 ";
$resultado = $enlace->query($query);


if(!$resultado)
{
    $where="";
    $query="SELECT distinct Foto1,Foto2,Foto3,Country,Store,Location,Route,Foto4,ProductGroup,Week,City FROM AvengersPOPExcecution2 ".$where." limit 50";
    $resultado = $enlace->query($query);
}             
              
                
?>


<html>
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">  
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>POP EXECUTION</title>`

     <!-- jQuery -->
     <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

     <!-- These two libraries are copied from the download builder here: https://datatables.net/download/-->
     <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/v/bs-3.3.7/jq-3.2.1/dt-1.10.16/b-1.4.2/b-colvis-1.4.2/cr-1.4.1/fh-3.1.3/r-2.2.0/sc-1.4.3/datatables.min.css"/>
    <script type="text/javascript" src="http://cdn.datatables.net/v/bs-3.3.7/jq-3.2.1/dt-1.10.16/b-1.4.2/b-colvis-1.4.2/cr-1.4.1/fh-3.1.3/r-2.2.0/sc-1.4.3/datatables.min.js"></script>
    
    <!-- Include the Tableau Extensions library so we can communicate with Tableau -->
    <script src="lib/tableau-extensions-1.latest.js"></script>
     <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
     <link rel="stylesheet" href="fonts/icomoon/style.css"> 
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/magnific-popup.css">
     <link rel="stylesheet" href="css/jquery-ui.css">
     <link rel="stylesheet" href="css/owl.carousel.min.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css"> 
     <link rel="stylesheet" href="css/bootstrap-datepicker.css"> 
     <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
     <link rel="stylesheet" href="css/aos.css">
     <link rel="stylesheet" href="css/fancybox.min.css">
     <link rel="stylesheet" href="css/style.css">



     <!-- Tableau Extensions API Library  -->
     <!-- library is in the /lib directory -->
     <script src="../lib/tableau.extensions.1.latest.js"></script>

     <!-- Your JavaScript code that uses the Extensions API goes here 
     <script src="./showimages.js"></script>-->
     </head>
     <body>
       
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
  
    <header class="header-bar d-flex d-lg-block align-items-center" data-aos="fade-left">

      <div class="site-logo">
        <a href="index.php">Avengers POP Excecution</a>
      </div>      
      <div class="d-inline-block d-xl-none ml-md-3 ml-auto py-3" style="position: center; top: 5px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h1"></span></a></div>
      <form method="post">
      <div class="main-menu">
     
               <ul class="js-clone-nav">
				       <input type="text" placeholder="Search..." name="xbuscar"/>
                </ul>		


                <ul class="social js-clone-nav">
				        <select name="xcountry">
                <option value="">Country</option>
                <?php
                $query1="SELECT distinct Country FROM AvengersPOPExcecution2" ;           
                $resultado1 = $enlace->query($query1);            
                while ($fila = $resultado1->fetch_row()) 
                {
                echo '<option value="'.$fila[0].'">'.$fila[0].'</option>';
                }

                ?>
                </select>
                </ul>

                <ul class="social js-clone-nav">
				        <select name="xcity">
                <option value="">City</option>
                <?php
                $query1="SELECT distinct City FROM AvengersPOPExcecution2" ;           
                $resultado1 = $enlace->query($query1);            
                while ($fila = $resultado1->fetch_row()) 
                {
                echo '<option value="'.$fila[0].'">'.$fila[0].'</option>';
                }

                ?>
                </select>
                </ul>

                <ul class="social js-clone-nav">
				        <select name="xweek">
                <option value="">Week</option>
                <?php
                $query1="SELECT distinct Week FROM AvengersPOPExcecution2" ;           
                $resultado1 = $enlace->query($query1);            
                while ($fila = $resultado1->fetch_row()) 
                {
                echo '<option value="'.$fila[0].'">'.$fila[0].'</option>';
                }

                ?>
                </select>
                </ul>

                <ul class="social js-clone-nav">
				        <select name="xchannel">
                <option value="">Channel</option>
                <?php
                $query1="SELECT distinct Store FROM AvengersPOPExcecution2" ;           
                $resultado1 = $enlace->query($query1);            
                while ($fila = $resultado1->fetch_row()) 
                {
                echo '<option value="'.$fila[0].'">'.$fila[0].'</option>';
                }

                ?>
                </select>
                </ul>



              
				    <button name="buscar" type="submit">Buscar</button>
            </form>

            </div>
            
            
    
    </header> 



    
    <main class="main-content">
      <div class="container-fluid photos">
        <div class="row align-items-stretch"> 
      


</html>


    <?php 



    while ($fila = $resultado->fetch_row()) {
    

    
      
      echo '<div class="col-4 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">';
      echo  '<a href="http://www.msocheil.com/Documentos/AvengersPOP/'.$fila[0].'" class="d-block photo-item" data-fancybox="gallery">';
      echo '<img src="http://www.msocheil.com/Documentos/AvengersPOP/'.$fila[0].'" alt="Image" class="img-fluid">';
      echo '<div class="photo-text-more">';
      echo '<div class="photo-text-more">';
      echo '<h1 class="heading">'.$fila[3].'</h3>';
      echo '<p class="meta">'.$fila[10].'</p>';
      echo '<h3 class="heading">'.$fila[4].'</h3>';
      echo '<p class="meta">'.$fila[5].'</p>';
      echo '<p class="meta">'.$fila[6].'</p>';
      echo '<p class="meta">'.$fila[8].'</p>';
      echo '</div>';
      echo '</div>';
      echo '</a>';
      echo '<p class="meta">W'.$fila[9].'</p>';
      echo '<p class="meta">Before</p>';
      echo '<p class="meta">'.$fila[6].'</p>';
      echo '<p class="meta">'.$fila[8].'</p>';
      echo '</div>';
      
   

      echo '<div class="col-4 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">';
      echo  '<a href="http://www.msocheil.com/Documentos/AvengersPOP/'.$fila[1].'" class="d-block photo-item" data-fancybox="gallery">';
      echo '<img src="http://www.msocheil.com/Documentos/AvengersPOP/'.$fila[1].'" alt="Image" class="img-fluid">';
      echo '<div class="photo-text-more">';
      echo '<div class="photo-text-more">';
      echo '<h1 class="heading">'.$fila[3].'</h3>';
      echo '<p class="meta">'.$fila[10].'</p>';
      echo '<h3 class="heading">'.$fila[4].'</h3>';
      echo '<p class="meta">'.$fila[5].'</p>';
      echo '<p class="meta">'.$fila[6].'</p>';
      echo '<p class="meta">'.$fila[8].'</p>';
      echo '</div>';
      echo '</div>';
      echo '</a>';
      echo '<p class="meta">W'.$fila[9].'</p>';
      echo '<p class="meta">Before</p>';
      echo '<p class="meta">'.$fila[6].'</p>';
      echo '<p class="meta">'.$fila[8].'</p>';
      echo '</div>';

      echo '<div class="col-4 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">';
      echo  '<a href="http://www.msocheil.com/Documentos/AvengersPOP/'.$fila[2].'" class="d-block photo-item" data-fancybox="gallery">';
      echo '<img src="http://www.msocheil.com/Documentos/AvengersPOP/'.$fila[2].'" alt="Image" class="img-fluid">';
      echo '<div class="photo-text-more">';
      echo '<div class="photo-text-more">';
      echo '<h1 class="heading">'.$fila[3].'</h3>';
      echo '<p class="meta">'.$fila[10].'</p>';
      echo '<h3 class="heading">'.$fila[4].'</h3>';
      echo '<p class="meta">'.$fila[5].'</p>';
      echo '<p class="meta">'.$fila[6].'</p>';
      echo '<p class="meta">'.$fila[8].'</p>';
      echo '</div>';
      echo '</div>';
      echo '</a>';
      echo '<p class="meta">W'.$fila[9].'</p>';
      echo '<p class="meta">After</p>';
      echo '<p class="meta">'.$fila[6].'</p>';
      echo '<p class="meta">'.$fila[8].'</p>';
      echo '</div>';


      echo '<div class="col-4 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">';
      echo  '<a href="http://www.msocheil.com/Documentos/AvengersPOP/'.$fila[7].'" class="d-block photo-item" data-fancybox="gallery">';
      echo '<img src="http://www.msocheil.com/Documentos/AvengersPOP/'.$fila[7].'" alt="Image" class="img-fluid">';
      echo '<div class="photo-text-more">';
      echo '<div class="photo-text-more">';
      echo '<h1 class="heading">'.$fila[3].'</h3>';
      echo '<p class="meta">'.$fila[10].'</p>';
      echo '<h3 class="heading">'.$fila[4].'</h3>';
      echo '<p class="meta">'.$fila[5].'</p>';
      echo '<p class="meta">'.$fila[6].'</p>';
      echo '<p class="meta">'.$fila[8].'</p>';
      echo '</div>';
      echo '</div>';
      echo '</a>';
      echo '<p class="meta">W'.$fila[9].'</p>';
      echo '<p class="meta">After</p>';
      echo '<p class="meta">'.$fila[6].'</p>';
      echo '<p class="meta">'.$fila[8].'</p>';
      echo '</div>';

    }

    ;  

    /* liberar el conjunto de resultados */
    $resultado->close();

?>  
      
</div>

</div>
</main>

</div> <!-- .site-wrap -->

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/aos.js"></script>

<script src="js/jquery.fancybox.min.js"></script>

<script src="js/main.js"></script>

  </body>
</html>
