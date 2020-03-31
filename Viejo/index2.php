
<?php
	 include('PopExecutionIMG/php/Connect.php');
	
	 include('PopExecutionIMG/filter.php');
	
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
     <link rel="stylesheet" href="PopExecutionIMG/fonts/icomoon/style.css"> 
     <link rel="stylesheet" href="PopExecutionIMG/css/bootstrap.min.css">
     <link rel="stylesheet" href="PopExecutionIMG/css/magnific-popup.css">
     <link rel="stylesheet" href="PopExecutionIMG/css/jquery-ui.css">
     <link rel="stylesheet" href="PopExecutionIMG/css/owl.carousel.min.css">
     <link rel="stylesheet" href="PopExecutionIMG/css/owl.theme.default.min.css"> 
     <link rel="stylesheet" href="PopExecutionIMG/css/bootstrap-datepicker.css"> 
     <link rel="stylesheet" href="PopExecutionIMG/fonts/flaticon/font/flaticon.css">
     <link rel="stylesheet" href="PopExecutionIMG/css/aos.css">
     <link rel="stylesheet" href="PopExecutionIMG/css/fancybox.min.css">
     <link rel="stylesheet" href="PopExecutionIMG/css/style.css">



     <!-- Tableau Extensions API Library  -->
     <!-- library is in the /lib directory -->
     <script src="/lib/tableau.extensions.1.latest.js"></script>

     <!-- Your JavaScript code that uses the Extensions API goes here 
     <script src="./showimages.js"></script>-->
		
	 <?php include('PopExecutionIMG/Script.php'); ?>




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
  
  <div align="left" class="main-menu">

		<form id="Search" name="Search"  method="POST">

    <div>
    <input type="text" placeholder="Search..." name="xbuscar"/> 
    <input  type="submit" name='Search' id="Search" />
    </div>
   
    </form>
    </div>
    </br>


   <div align="left" class="main-menu">

    <form id="Buscar" name="Buscar"  method="POST">
    <div>		<p>Country Name</p>	
			<select name="cbx_Country" id="cbx_Country">
      
        <option value=""><?php echo $row['Country']; ?></option>
      <option value="">----All----</option>
				<?php while($rowE = $resultadoE->fetch_assoc()) { ?>
          <option value="<?php echo $rowE['Country']; ?>"><?php echo $rowE['Country']; ?></option>
				<?php } ?>
			</select>
			</div>
			
			
			<br />
			
			<div><p>City Name</p><select name="cbx_City" id="cbx_City">

      <option value=""><?php echo $row['City']; ?></option>
      <option value="">----All----</option>
				<?php while($rowM = $resultadoM->fetch_assoc()) { ?>
					<option value="<?php echo $rowM['City']; ?>" ><?php echo $rowM['City']; ?></option>
				<?php } ?>
			</select></div>
			
      <br />


      <div><p>Channel Category</p><select name="cbx_Channel" id="cbx_Channel">
      
      <option value=""><?php echo $row['Channel']; ?></option>
      <option value="">----All----</option>
				<?php while($rowCh = $resultadoCh->fetch_assoc()) { ?>
				<option value="<?php echo $rowCh['Channel']; ?>" ><?php echo $rowCh['Channel']; ?></option>
				<?php } ?>
			</select></div>
			<br />
      
    
    
    
      <div><p>Channel Name</p><select name="cbx_Store" id="cbx_Store">
      
      <option value=""><?php echo $row['Store']; ?></option>
      <option value="">----All----</option>
				<?php while($rowS = $resultadoS->fetch_assoc()) { ?>
				<option value="<?php echo $rowS['Store']; ?>" ><?php echo $rowS['Store']; ?></option>
				<?php } ?>
			</select></div>
			<br />
			
			<div><p>Site Name</p><select name="cbx_Location" id="cbx_Location">
      
      <option value=""><?php echo $row['Location']; ?></option>
      <option value="">----All----</option>
				<?php while($rowL = $resultadoL->fetch_assoc()) { ?>
				<option value="<?php echo $rowL['Location']; ?>" ><?php echo $rowL['Location']; ?></option>
				<?php } ?>
			</select></div>
			<br />


      <div><p>Division</p><select name="cbx_Division" id="cbx_Division">
      
      <option value=""><?php echo $row['Sub_Categoria']; ?></option>
      <option value="">----All----</option>
				<?php while($rowD = $resultadoD->fetch_assoc()) { ?>
				<option value="<?php echo $rowD['Sub_Categoria']; ?>" ><?php echo $rowD['Sub_Categoria']; ?></option>
				<?php } ?>
			</select></div>
			<br />

     
			<div><p>Product Group</p><select name="cbx_ProductGroup" id="cbx_ProductGroup">
      
      <option value=""><?php echo $row['ProductGroup']; ?></option>
      <option value="">----All----</option>
				<?php while($rowP = $resultadoP->fetch_assoc()) { ?>
				<option value="<?php echo $rowP['ProductGroup']; ?>" ><?php echo $rowP['ProductGroup']; ?></option>
				<?php } ?>
			</select></div>
			<br />


			<div><p>Week Route</p><select name="cbx_week" id="cbx_week">
      <option value=""><?php echo $row['Week_Route']; ?></option>
      <option value="">Week Route</option>
				<?php while($rowW = $resultadoW->fetch_assoc()) { ?>
				<option value="<?php echo $rowW['Week_Route']; ?>" ><?php echo $rowW['Week_Route']; ?></option>
				<?php } ?>
			</select></div>
			<br />




			<input type="submit" id="Buscar" name="Buscar" value="Search" />
		</form>
	
	 
		</header> 


<main class="main-content">
<div class="container-fluid photos">
<div class="row align-items-stretch" id='Formulario'> 

</html>



<?php
	 
	
	 include('PopExecutionIMG/formulario.php');
	
?>


</div>

</div>
</main>

</div> <!-- .site-wrap -->

<script src="PopExecutionIMG/js/jquery-3.3.1.min.js"></script>
<script src="PopExecutionIMG/js/jquery-migrate-3.0.1.min.js"></script>
<script src="PopExecutionIMG/js/jquery-ui.js"></script>
<script src="PopExecutionIMG/js/popper.min.js"></script>
<script src="PopExecutionIMGs/bootstrap.min.js"></script>
<script src="PopExecutionIMG/js/owl.carousel.min.js"></script>
<script src="PopExecutionIMG/js/jquery.stellar.min.js"></script>
<script src="PopExecutionIMG/js/jquery.countdown.min.js"></script>
<script src="PopExecutionIMG/js/jquery.magnific-popup.min.js"></script>
<script src="PopExecutionIMG/js/bootstrap-datepicker.min.js"></script>
<script src="PopExecutionIMG/js/aos.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
<script src="PopExecutionIMG/js/jquery.fancybox.min.js"></script>

<script src="PopExecutionIMG/js/main.js"></script>

  </body>
</html>