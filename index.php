
<?php
	 include('php/Connect.php');
	
	 include('filter.php');
	
?>





 
 <html>
	<head>
		
	<meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">  
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
		
	 <?php include('Script.php'); ?>




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

<div align="left" class="main-menu">

<form id="Search" name="Search"  method="POST">
<div>
<input type="text" placeholder="Search..." name="xbuscar"/> 
<input  type="submit" name="Search" id="Search" />
</div>

</form>
</div>
</br>
  
  
  
  <form id="Hola" name="Hola"  method="POST">
    <div>		<p>Country Names</p>	
			<select name="cbx_Country" id="cbx_Country">
      
        <option value=""><?php echo $Country; ?></option>
      <option value="">All Countries</option>
				<?php while($rowE = $resultadoE->fetch_assoc()) { ?>
          <option value="<?php echo $rowE['Country']; ?>"><?php echo $rowE['Country']; ?></option>
				<?php } ?>
			</select>
			</div>
			
			
			<br />
			
			<div><p>City Names</p><select name="cbx_City" id="cbx_City">

      <option value=""><?php echo $City ?></option>
      <option value="">All Cities</option>
				<?php while($rowM = $resultadoM->fetch_assoc()) { ?>
					<option value="<?php echo $rowM['City']; ?>" ><?php echo $rowM['City']; ?></option>
				<?php } ?>
			</select></div>
			
      <br />


      <div><p>Channel Categories</p><select name="cbx_Channel" id="cbx_Channel">
      
      <option value=""><?php echo $Channel; ?></option>
      <option value="">All Channel Categories</option>
				<?php while($rowCh = $resultadoCh->fetch_assoc()) { ?>
				<option value="<?php echo $rowCh['Channel']; ?>" ><?php echo $rowCh['Channel']; ?></option>
				<?php } ?>
			</select></div>
			<br />
      
    
    
    
      <div><p>Sites Groups</p><select name="cbx_Store" id="cbx_Store">
      
      <option value=""><?php echo $Store; ?></option>
      <option value="">All Site Groups</option>
				<?php while($rowS = $resultadoS->fetch_assoc()) { ?>
				<option value="<?php echo $rowS['Store']; ?>" ><?php echo $rowS['Store']; ?></option>
				<?php } ?>
			</select></div>
			<br />
			
			<div><p>Site Names</p><select name="cbx_Location" id="cbx_Location">
      
      <option value=""><?php echo $Location ?></option>
      <option value="">All Site Names</option>
				<?php while($rowL = $resultadoL->fetch_assoc()) { ?>
				<option value="<?php echo $rowL['site_id']; ?>" ><?php echo $rowL['Location']; ?>-<?php echo $rowL['site_id']; ?></option>
				<?php } ?>
			</select></div>
			<br />


      <div><p>Divisions</p><select name="cbx_Division" id="cbx_Division">
      
      <option value=""><?php echo $Division ?></option>
      <option value="">All Divisions</option>
				<?php while($rowD = $resultadoD->fetch_assoc()) { ?>
				<option value="<?php echo $rowD['Sub_Categoria']; ?>" ><?php echo $rowD['Sub_Categoria']; ?></option>
				<?php } ?>
			</select></div>
			<br />

     
			<div><p>Product Groups</p><select name="cbx_ProductGroup" id="cbx_ProductGroup">
      
      <option value=""><?php echo $ProductGroup ?></option>
      <option value="">All Product Groups</option>
				<?php while($rowP = $resultadoP->fetch_assoc()) { ?>
				<option value="<?php echo $rowP['ProductGroup']; ?>" ><?php echo $rowP['ProductGroup']; ?></option>
				<?php } ?>
			</select></div>
			<br />


			<div><p>Route Weeks</p><select name="cbx_week" id="cbx_week">
      <option value=""><?php echo $Week_Route; ?></option>
      <option value="">Route Weeks</option>
				<?php while($rowW = $resultadoW->fetch_assoc()) { ?>
				<option value="<?php echo $rowW['Week_Route']; ?>" ><?php echo $rowW['Week_Route']; ?></option>
				<?php } ?>
			</select></div>
			<br />




			<input type="submit" id="Search" name="Search" value="Search" />

      <input type="submit" id="Reset" name="Reset" value="Reset" />
		</form>
	
	 
		</header> 


<main class="main-content">
<div class="container-fluid photos">
<div class="row align-items-stretch"> 

</html>

    <?php 



    while ($fila = $resultado2->fetch_row()) {
    

   
      
      echo '<div class="col-4 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">';
      echo  '<a href="http://www.msocheil.com/Documentos/AvengersPOP/'.$fila[0].'" class="d-block photo-item" data-fancybox="gallery">';
      echo '<img src="http://www.msocheil.com/Documentos/AvengersPOP/'.$fila[0].'" alt="Image" class="img-fluid">';
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
      echo '<p class="meta">Before</p>';
      echo '<p class="meta">'.$fila[6].'</p>';
      echo '<p class="meta">'.$fila[12].'</p>';
      echo '<p class="meta">'.$fila[8].'</p>';
      echo '</div>';
      
   

      echo '<div class="col-4 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">';
      echo  '<a href="http://www.msocheil.com/Documentos/AvengersPOP/'.$fila[1].'" class="d-block photo-item" data-fancybox="gallery">';
      echo '<img src="http://www.msocheil.com/Documentos/AvengersPOP/'.$fila[1].'" alt="Image" class="img-fluid">';
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