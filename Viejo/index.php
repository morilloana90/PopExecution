
 
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

<div id="navbar"> </div>

<main class="main-content">
<div class="container-fluid photos">
<div class="row align-items-stretch" > 
</html>

    <?php 



    while ($fila = $resultado2->fetch_row()) {
    

   
      
      echo '<div class="col-4 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">';
      echo  '<a href="http://www.msocheil.com/Documentos/AvengersPOP/'.$fila[0].'" class="d-block photo-item" data-fancybox="gallery">';
      echo '<img src="http://www.msocheil.com/Documentos/AvengersPOP/'.$fila[0].'" alt="Image" class="img-fluid">';
      echo '<div class="photo-text-more">';
      echo '<div class="photo-text-more">';
      echo '<h1 class="heading">'.$fila[3].'</h3>';
      echo '<p class="meta">'.$fila[12].'</p>';
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
      echo '<p class="meta">'.$fila[12].'</p>';
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
      echo '<p class="meta">'.$fila[12].'</p>';
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
      echo '<p class="meta">'.$fila[11].'</p>';
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
<script src="/js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/aos.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
<script src="js/jquery.fancybox.min.js"></script>

<script src="js/main.js"></script>

  </body>


</html>

<script type="text/javascript">
$(document).ready(function(){
$('#navbar').load('navbar.php');
$('#formulario').load('formulario.php');
});
</script>