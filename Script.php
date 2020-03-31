		
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
						$.post("getChannel3.php", { Location : Country}, function(data){
							$("#cbx_Channel").html(data);
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
						$.post("getDivision.php", { Location : Country}, function(data){
							$("#cbx_Division").html(data);
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

		
			})
			});

			


			
			$(document).ready(function(){
				$("#cbx_City").change(function () {


					$("#cbx_City option:selected").each(function () {
						City = $(this).val();
						$.post("getChannel.php", { City : City }, function(data){
							$("#cbx_Channel").html(data);
						});            
					});

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

				
				})
			});





			$(document).ready(function(){
				$("#cbx_Channel").change(function () {

					$("#cbx_Channel option:selected").each(function () {
						Channel = $(this).val();
						$.post("getStore2.php", { Country : Channel }, function(data){
							$("#cbx_Store").html(data);
						});            
					});



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
				$("#cbx_Division").change(function () {
					$("#cbx_Division option:selected").each(function () {
						Division = $(this).val();
						$.post("getProductGroup.php", { Division : Location}, function(data){
							$("#cbx_ProductGroup").html(data);
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
						$.post("getDivision.php", { Location : Store }, function(data){
							$("#cbx_Division").html(data);
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
						$.post("getWeek.php", { ProductGroup : Store }, function(data){
							$("#cbx_week").html(data);
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
							
					}); 
				});

				
				$("#cbx_Location option:selected").each(function () {
				Location = $(this).val();
				$.post("getCity2.php", { Country : Location }, function(data){
						$("#cbx_City").html(data);
					}); 
				});
				
				
				$("#cbx_Location option:selected").each(function () {
				Location = $(this).val();
				$.post("getChannel2.php", { City : Location }, function(data){
						$("#cbx_Channel").html(data);
					}); 
				});
				$("#cbx_Location option:selected").each(function () {
				Location = $(this).val();
				$.post("getStore3.php", { Country : Location }, function(data){
						$("#cbx_Store").html(data);
					}); 
				});
				
				
			
				})
			});




		</script>