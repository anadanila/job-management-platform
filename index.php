<html>
	<body>
	<?php
		include('include/header.php');
		include('connection/db.php');

	?>
	<div class="hero-wrap js-fullheight" style="background-image: url('images/bg.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
			<div class="col-xl-10 ftco-animate mb-5 pb-5" data-scrollax=" properties: { translateY: '70%' }">
				<p class="mb-4 mt-5 pt-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Avem oferte de joburi pe gustul tău!</p>
				<h1 class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Jobul de vis <br><span>te așteaptă aici</span></h1>

				<div class="ftco-search">
					<div class="row">
						<div class="col-md-12 nav-link-wrap">
							<div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
								<a class="nav-link  mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Găsește un Job</a>
								<a class="nav-link" name="findcompany" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Găsește o companie</a>
							</div>
							<div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
							</div>
						</div>
						<div class="col-md-12 tab-wrap">

							<div class="tab-content p-4" id="v-pills-tabContent">

								<div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
									<form action="index.php" method="POST" name="cauta_job" class="search-job">
										<div class="row">
											<div class="col-md">
												<div class="form-group">
													<div class="form-field">
														<div class="icon"><span class="icon-briefcase"></span></div>
														<input type="text" name="cuvant_cheie" id="cuvant_cheie" class="form-control" placeholder="eg. Garphic. Web Developer">
													</div>
												</div>
											</div>
											<div class="col-md">
												<div class="form-group">
													<div class="form-field">
														<div class="select-wrap">
														  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
														  <select name="category" id="category" class="form-control">
															 <option value="" selected disabled hidden>Alege categorie...</option>
														  </select>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md">
												<div class="form-group">
													<div class="form-field">
														<div class="icon"><span class="icon-map-marker"></span></div>
												
														 <select name="oras" id="oras" class="form-control">
															 <option value="" selected disabled hidden>Alege unul dintre orasele disponibile...</option>
														  </select>
													</div>
												</div>
											</div>
											<div class="col-md">
												<div class="form-group">
													<div class="icon"><span class="ion-ios-arrow-down"></span></div>
													<select name="experience" id="experience" class="form-control">
													<option value="" selected disabled hidden>Alege nivel...</option>
													</select>
												</div>
											</div>
											<div class="col-md">
												<div class="form-group">
													<div class="form-field">
														<input type="text" value="Search" name="search" id="search" class="form-control btn btn-primary" readonly>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
								<div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-performance-tab">
									<div style="display:inline-block; width:360px;">
										<input type="text" name="company" id="company"  class="form-control" placeholder="Găsește o companie">
									</div>
									<div style="display:inline-block; margin-left:20px;">
										<button style="width:240px; height:50px;" id="cauta_companie" class="btn btn-info">Caută</button>
									</div>
									<div style="display:inline-block;">
										<button style="width:240px; height:50px;" id="toate_companiile" class="btn btn-info"> Vezi toate companiile</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section class="ftco-section services-section bg-light">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-3 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services d-block">
						<div class="icon"><span class="flaticon-resume"></span></div>
						<div class="media-body">
							<h3 class="heading mb-3">Oferte diverse</h3>
						</div>
					</div>      
				</div>
				<div class="col-md-3 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services d-block">
						<div class="icon"><span class="flaticon-collaboration"></span></div>
						<div class="media-body">
							<h3 class="heading mb-3">Găsești ușor ce dorești</h3>
						</div>
					</div>    
				</div>
				<div class="col-md-3 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services d-block">
						<div class="icon"><span class="flaticon-promotions"></span></div>
						<div class="media-body">
							<h3 class="heading mb-3">Carieră de top</a></h3>
						</div>
					</div>      
				</div>
				<div class="col-md-3 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services d-block">
						<div class="icon"><span class="flaticon-employee"></span></div>
						<div class="media-body">
							<h3 class="heading mb-3" id="test">Feedback rapid </h3>
						</div>
					</div>      
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-section ftco-counter">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 heading-section text-center ftco-animate">
				<span class="subheading">Categoriile de joburi disponibile</span>
				<div class="row">
					<div id="displaycategory" class="container">
					</div>
				</div>	
			</div>
		</div>
		<div class="mesaj_favorit" name="mesaj_favorit" id="mesaj_favorit"><div class="continut"><span class="heart icon-heart icon-size"></span></div></div>
    </section>
	<!--Afiseaza_job-->
	<div id="afiseaza_joburi">
		<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<h2 id="joburi_gasite" class="mb-4"></h2>
					<br><br>
				</div>
			</div>
			<div id="afiseaza_denumire_job" class="col-md-12 ftco-animate">
			</div>
		</div>
    </div>
	<!--Afiseaza_job-->
	<!--Cauta companii-->
	<div id="here">
	</div>
	<!--Cauta companii-->	
	<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
    </section>
	<footer class="ftco-footer ftco-bg-dark ftco-section">
		<div class="row mb-5">
			<div class="col-md">
				<div class="ftco-footer-widget mb-4">
				</div>
			</div>
			<div class="col-md">
				<div class="ftco-footer-widget mb-4">
				</div>
			</div>
			<div class="col-md">
				<div class="ftco-footer-widget mb-4 ml-md-4">
				</div>
			</div>
			<div class="col-md">
				<div class="ftco-footer-widget mb-4">
				</div>
			</div>
		</div>
    </footer>
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
	<script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script>
	$(document).ready(function() 
	{
	
		function afiseaza_categorii()
		{   
			$.ajax({
				url:"afiseaza_index.php",
				method:"POST",
				success:function(data){
				$('#category').append(data);
				}
			});
		}
		afiseaza_categorii()		
		function afiseaza_orase_disponibile()
		{   
			$.ajax({
				url:"afiseaza_orase_disponibile.php",
				method:"POST",
				success:function(data){
				$('#oras').append(data);
				}
			});
		}
		
		afiseaza_orase_disponibile()
		function afiseaza_experienta()
		{   
			$.ajax({
			url:"afiseaza_experienta.php",
			method:"POST",
			success:function(data){
			$('#experience').append(data);
			}
			});
		}
		afiseaza_experienta()
		///categorii_favorite
		$('#displaycategory').load("displaycategory.php");
		afiseaza_favorite();
	});
		function verifica_login()
			{  var user = '<?php echo $_SESSION['email']?>';
			   if(user!='')
			   {
				 
				  return true;
			   }
			   else
			   {
					return false;

			   }	
				   
			}
		function alerta() 
		{   
			$('#mesaj_favorit').toggle("slide");
			setTimeout(function() { $("#mesaj_favorit").fadeOut(1500); }, 2000)
		}
		function insert(id, text)
		{  
		var deTrimis={
			id:id,
			text:text
		};
		$.ajax({
			url:"insert_categorie_favorita.php",
			method:"POST",
			data: deTrimis,
			dataType:"text",
			success:function(data)
			{ 
				alerta();
			}
		});
		}

		$(document).on('click', '.categori', function()
		{	
			var id=$(this).data("id1");
			var text=$(this).text();
			var i=0;
			verifica_login();
			if(verifica_login()==true)
			{
			$(this).toggleClass("red");
			if ( $(this).hasClass("red") )
			{  
				insert(id, text);
				$('#mesaj_favorit').html('<span style="color:red;" class="icon-heart icon-size"></span><p>Adăugată la favorite<p>');
				$('#numara_favorite').html(function(i, val) { return val=val*1+1 });
				afiseaza_favorite();
			}
			else
			{
				alerta();
				$('#mesaj_favorit').text('Categoria a fost eliminată de la favorite');
				var id=$(this).data("id1");
				$('#numara_favorite').html(function(i, val) { return val=val*1-1 });
				$.ajax({
					url:"sterge_categorie_favorita.php",
					method: "POST",
					data: {id:id},
					dataType:"text",
					success: function(data)
					{
						alert(data);
						
					}
				});
			}
			}
		function afiseaza_favorite()
		{  
			$.ajax({
				url:"afiseaza_fav_dropdown.php",
				method:"POST",
				success:function(data){
					$('#afiseaza_fav').html(data);
				}
			});
		}
		afiseaza_favorite();
		
	});
	//joburi din categorii favorite
		$(document).on('click', '#jobCategorie', function()
		{	 
			var id_categorie=$(this).data("id1");
			$.ajax({
				url:"afiseaza_joburi_categorie_favorita.php",
				method:"GET",
				data:{ id_categorie:id_categorie
					 },
				success:function(data)
				{ 
					$("#afiseaza_denumire_job").html(data);
					$('#joburi_gasite').text('Joburi găsite');
				}
			});	
		});
		$(document).on('click', '#search', function()
		{
			var denumire_job=$('input[name="cuvant_cheie"]').val();
			var oras=$("#oras").find("option:selected").text();
			
			var categorie = $("#category").find("option:selected").val();
			var experienta=$("#experience").find("option:selected").text();
			$.ajax({
				url:"afiseaza_joburi.php",
				method:"GET",
				data:{ 	denumire_job:denumire_job,
						oras:oras,
						experienta:experienta,
						categorie:categorie
					},
				success:function(data)
				{ 
					if(data.length!=4)//daca data e empty data.length este 4 din cauza html
					{		
						$("#afiseaza_denumire_job").html(data);
						$('#joburi_gasite').text('Joburi găsite');
					}
					else
					{		
						$('#joburi_gasite').text('Nu am găsit niciun job');
					}
				}
			});	
		});
		$(document).on('click', '#aplica', function()
		{	if(verifica_login()==true)
			{
				var id_job=$(this).data("id1");
				window.location.href = "http://localhost/job_portal/aplica_job_formular.php?id_job="+id_job;
			}
			else
			{
				window.location.href = "http://localhost/job_portal/login/login.php";
			}		
		});
	// afiseaza companii in index
		function search_companii()
		{
			var companie=$('input[name="company"]').val();
			$.ajax({
				url:"afiseaza_companii.php",
				method:"GET",
				data:{ companie:companie
				},
				success:function(data)
				{ 
					$('#joburi_gasite').text('Companiile cu care colaborăm');
					$('#afiseaza_denumire_job').html(data);
				}
			});  
		}
		$(document).on('click', '#cauta_companie', function()
		{	 
			search_companii();
		});
		$(document).on('click', '#toate_companiile', function()
		{	
			search_companii();
		});
	//vezi joburile fiecarei companii
		$(document).on('click', '#vezi_joburi_companie', function()
		{	 
			var id_admin1=$(this).data("id2");
			$.ajax({
				url:"afiseaza_joburi_companie.php",
				method:"GET",
				data:{ id_admin1:id_admin1
				},
				success:function(data)
				{ 
					$('#joburi_gasite').text('Joburile noastre');
					$('#afiseaza_denumire_job').html(data);
				}
			}); 
		});
	</script>
	</body>
</html>




