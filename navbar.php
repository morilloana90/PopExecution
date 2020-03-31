

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

    <form id="Hola" name="Hola"  method="POST">
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




			<input type="submit" id="Hola" name="Hola" value="Search" onclick="Buscar()";/>
		</form>
	
	 
		</header> 




<script language="javascript">
			$(document).ready(function(){
				$("#cbx_Country").change(function () {
					
					//$('#cbx_location').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');
					
					$("#cbx_Country option:selected").each(function () {
						Country = $(this).val();
						$.post("getCity.php", { Country: Country }, function(data){
							$("#cbx_City").html(data);
					}); 
				});

				$("#cbx_Country option:selected").each(function () {
						Country = $(this).val();
						$.post("getLocation2.php", {City : Country}, function(data){
							$("#cbx_Location").html(data);
					}); 
				});

				$("#cbx_Country option:selected").each(function () {
						Country = $(this).val();
						$.post("getStore2.php", { Country : Country}, function(data){
							$("#cbx_Store").html(data);
					}); 
				});

				$("#cbx_Country option:selected").each(function () {
						Country = $(this).val();
						$.post("getWeek.php", { ProductGroup : Country}, function(data){
							$("#cbx_week").html(data);
					}); 
				});

				$("#cbx_Country option:selected").each(function () {
						Country = $(this).val();
						$.post("getProductGroup.php", { Location : Country}, function(data){
							$("#cbx_ProductGroup").html(data);
					}); 
				});

				$("#cbx_Country option:selected").each(function () {
						Country = $(this).val();
						$.post("getDivision.php", { Location : Country}, function(data){
							$("#cbx_Division").html(data);
					}); 
				});

				$("#cbx_Country option:selected").each(function () {
						Country = $(this).val();
						$.post("getChannel2.php", { Location : Country}, function(data){
							$("#cbx_Channel").html(data);
					}); 
				});
			
				})
			});


			
			$(document).ready(function(){
				$("#cbx_City").change(function () {
					$("#cbx_City option:selected").each(function () {
						City = $(this).val();
						$.post("getLocation.php", { City: City }, function(data){
							$("#cbx_Location").html(data);
						});            
					});
					$("#cbx_City option:selected").each(function () {
						City = $(this).val();
						$.post("getWeek.php", { ProductGroup: City }, function(data){
							$("#cbx_week").html(data);
						});            
					});

					$("#cbx_City option:selected").each(function () {
						City = $(this).val();
						$.post("getStore.php", { Country : City }, function(data){
							$("#cbx_Store").html(data);
						});            
					});

					$("#cbx_City option:selected").each(function () {
						City = $(this).val();
						$.post("getProductGroup.php", { Location : City }, function(data){
							$("#cbx_ProductGroup").html(data);
						});            
					});

					$("#cbx_City option:selected").each(function () {
						City = $(this).val();
						$.post("getDivision.php", { Location : City }, function(data){
							$("#cbx_Division").html(data);
						});            
					});

					$("#cbx_City option:selected").each(function () {
						City = $(this).val();
						$.post("getCountry.php", { City : City }, function(data){
							$("#cbx_Country").html(data);
						});            
					});

					$("#cbx_City option:selected").each(function () {
						City = $(this).val();
						$.post("getChannel2.php", { City : City }, function(data){
							$("#cbx_Channel").html(data);
						});            
					});


				})
			});





			$(document).ready(function(){
				$("#cbx_Channel").change(function () {
					$("#cbx_Channel option:selected").each(function () {
						Channel = $(this).val();
						$.post("getLocation.php", { City: Channel }, function(data){
							$("#cbx_Location").html(data);
						});            
					});
					$("#cbx_Channel option:selected").each(function () {
						Channel = $(this).val();
						$.post("getWeek.php", { ProductGroup: Channel }, function(data){
							$("#cbx_week").html(data);
						});            
					});

					$("#cbx_Channel option:selected").each(function () {
						Channel = $(this).val();
						$.post("getStore.php", { Country : Channel }, function(data){
							$("#cbx_Store").html(data);
						});            
					});

					$("#cbx_Channel option:selected").each(function () {
						Channel = $(this).val();
						$.post("getProductGroup.php", { Location : Channel }, function(data){
							$("#cbx_ProductGroup").html(data);
						});            
					});

					$("#cbx_Channel option:selected").each(function () {
						Channel = $(this).val();
						$.post("getDivision.php", { Location : Channel }, function(data){
							$("#cbx_Division").html(data);
						});            
					});

					


				})
			});



			$(document).ready(function(){
				$("#cbx_Store").change(function () {
					$("#cbx_Store option:selected").each(function () {
						Store = $(this).val();
						$.post("getLocation.php", { City : Store }, function(data){
							$("#cbx_Location").html(data);
						});            
					});
					$("#cbx_Store option:selected").each(function () {
						Store = $(this).val();
						$.post("getWeek.php", { ProductGroup : Store }, function(data){
							$("#cbx_week").html(data);
						});            
					});
					

					$("#cbx_Store option:selected").each(function () {
						Store = $(this).val();
						$.post("getProductGroup.php", { Location : Store }, function(data){
							$("#cbx_ProductGroup").html(data);
						});            
					});

					$("#cbx_Store option:selected").each(function () {
						Store = $(this).val();
						$.post("getDivision.php", { Location : Store }, function(data){
							$("#cbx_Division").html(data);
						});            
					});

					$("#cbx_Store option:selected").each(function () {
						Store = $(this).val();
						$.post("getChannel2.php", { Location : Store }, function(data){
							$("#cbx_Channel").html(data);
						});            
					});

					$("#cbx_Store option:selected").each(function () {
						Store = $(this).val();
						$.post("getCountry.php", { City : Store }, function(data){
							$("#cbx_Country").html(data);
						});            
					});




				})
			});


			$(document).ready(function(){
				$("#cbx_Location").change(function () {
					$("#cbx_Location option:selected").each(function () {
						Location = $(this).val();
						$.post("getWeek.php", { ProductGroup : Location}, function(data){
							$("#cbx_week").html(data);
					}); 
				});

				$("#cbx_Location option:selected").each(function () {
						Location = $(this).val();
						$.post("getProductGroup.php", { Location : Location}, function(data){
							$("#cbx_ProductGroup").html(data);
					}); 
				});


				$("#cbx_Location option:selected").each(function () {
						Location = $(this).val();
						$.post("getDivision.php", { Location : Location}, function(data){
							$("#cbx_Division").html(data);
					}); 
				});

				$("#cbx_Location option:selected").each(function () {
						Location = $(this).val();
						$.post("getCountry.php", { City : Location}, function(data){
							$("#cbx_Country").html(data);
				
				$("#cbx_Country option:selected").each(function () {
						Country = $(this).val();
						$.post("getCity.php", { Country: Country }, function(data){
							$("#cbx_City").html(data);
					}); 
				});



							
					}); 
				});
				
				
				
				
				})
			});



			$(document).ready(function(){
				$("#cbx_Division").change(function () {
					$("#cbx_Division option:selected").each(function () {
						Division = $(this).val();
						$.post("cbx_ProductGroup.php", { Division : Location }, function(data){
							$("#cbx_ProductGroup").html(data);
						});            
					});


					$("#cbx_Division option:selected").each(function () {
						Division = $(this).val();
						$.post("getWeek.php", { Division: ProductGroup }, function(data){
							$("#cbx_week").html(data);
						});            
					});
				})
			});







			$(document).ready(function(){
				$("#cbx_ProductGroup").change(function () {
					$("#cbx_Week option:selected").each(function () {
						ProductGroup = $(this).val();
						$.post("getWeek.php", { ProductGroup: ProductGroup }, function(data){
							$("#cbx_week").html(data);
						});            
					});
				})
			});


	
		


		</script>

