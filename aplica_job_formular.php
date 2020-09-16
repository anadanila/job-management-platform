<!DOCTYPE html>
<html lang="en">
 <?php
	include('include/header.php'); 
 ?>
     
    
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
          	<p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="">Aplică <i class="ion-ios-arrow-forward"></i></a></span> </p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Aplică Job</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ftco-animate">
              <div id="denumire_job"> </div>
              <div id="mesaj"></div>
              <form action="" method="post" enctype="multipart/form-data" name="formular_aplicare" id="formular_aplicare" style="border: 1px solid gray;">
					<div style="padding: 2%;">


					<div class="row">
						<div class="col-sm-6">
						<label for="">Numele tău</label>
						<input type="text" class="form-control" name="nume" placeholder="Nume..">     
					    <input type="hidden" name="aplicant_curent" id="aplicant_curent">
						<input type="hidden" name="id_job" id="id_job">
						</div>
						<div class="col-sm-6">
						<label for="">Prenumele tău</label>
						<input type="text" class="form-control" name="prenume" id="prenume" placeholder="Prenume">     

						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
						<label for="">Data nașterii</label>
						<input type="date"  max=<?php echo date('Y-m-d',strtotime('18 years ago')); ?> class="form-control" name="data" placeholder="Data nasterii">     

						</div>
						<div class="col-sm-6">
						<label for="">Încarcă CV-ul</label>
						<input type="file" name="CV" class="form-control" >     
					</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
						<label for="">Telefon</label>
						<input type="tel" class="form-control" name="telefon" id="telefon">
						 

						</div>
						<div class="col-sm-6">
						<label for="email">Email</label>
						<input type="email" class="form-control " name="email">     
						</div>
						
					</div>
					<br>


					<input type="text" id="trimite" name="submit"  placeholder="Submit" class="btn btn-primary btn-block" readonly>
					</div>
               </form>
            
           
           
          
            <div class="tag-widget post-tag-container mb-5 mt-5">
              
            </div>
             
           



         
          <div class="col-md-4 sidebar ftco-animate">
            
            

            <div class="sidebar-box ftco-animate">
              
            </div>
            </div>

            <div class="sidebar-box ftco-animate">
              
           </div>
            </div>

            <div class="sidebar-box ftco-animate">
              
            </div>
          </div>

        </div>
      </div>
    </section> 

	<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        
      </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
        	
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
            	<h2 class="ftco-heading-2"></h2>
            	<div class="block-23 mb-3">
	              <ul>
	                
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        
      </div>
    </footer>
    
  

  
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  
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
  <script src="js/main.js"></script>  
   <script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> 
    </script> 
</head> 
<script>
	 var urlParams;
	(window.onpopstate = function () {
		var match,
			pl     = /\+/g,  // 
			search = /([^&=]+)=?([^&]*)/g,
			decode = function (s) { return decodeURIComponent(s.replace(pl, " ")); },
			query  = window.location.search.substring(1);

		urlParams = {};
		while (match = search.exec(query))
		   urlParams[decode(match[1])] = decode(match[2]);
	})();
</script> 
 <script>
	$(document).ready(function() ///preluam datele pt jobul pt care s-a aplicat
	{    var id_job=urlParams["id_job"];
		 var id_job1=$('input[name="id_job"]').val(id_job);
		 $.ajax({
			 url:"aplica_job_afiseaza.php",
			 method:"GET",
			 data:{ id_job:id_job
				  },
			 success:function(data)
			 { 
				
				$("#denumire_job").html(data)
			 }
		 });
		$.ajax({
			type: "GET",
			url: "select_aplicant.php",
			success:function(data){
				var aplicant=$('#aplicant_curent').val(data);
				
			}
			
			});
			
	});	
	
	function verificEmail(email) {
	  var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	  if(!regex.test(email)) {
			return false;
	  }
	  else{
		return true;
	  }
	}
	function validareTelefon(phno) 
	{ 
		var regexPattern=new RegExp(/^[0-9-+]+$/);    
		return regexPattern.test(phno); 
	}
	$(document).on('click', '#trimite', function()
	{
		
		var id_aplicant=$('#aplicant_curent').val();
		var nume=$('input[name="nume"]').val();	
		var prenume=$('input[name="prenume"]').val();
		var data=$('input[name="data"]').val();	
		var formdata=new FormData($('#formular_aplicare')[0]);
		var file =$('input[name="CV"]')[0].files[0];
        formdata.append('file', file); 
		var telefon=$('input[name="telefon"]').val();
		var email=$('input[name="email"]').val();
		var id_job=urlParams["id_job"];
		if(!validareTelefon(telefon)){
			validateContent="<div class='alert alert-danger'>Telefon incorect!</div>"	
			$('#mesaj').append($(validateContent))
			
		}
		else
		{
			if(nume==''||prenume==''||data==''||file==''||telefon==''||email=='')
			{	
				validateContent="<div class='alert alert-danger'>Nu lăsa câmpuri necompletate!</div>"	
				$('#mesaj').append($(validateContent))
				
			}
			else
			{
				if(verificEmail(email)==false)
				{   alert('sunt unde trebuie');
					validateContent="<div class='alert alert-danger'>Mail invalid!</div>"	
					$('#mesaj').append($(validateContent))
					return false;
				}

				else
				{	
				
				$.ajax({
					  type: "POST",
					  url: "insert_aplicant.php",
					   data:formdata,
					  success:function(data){
							$('#mesaj').html(data);		
								},
					   contentType: false, 
						processData: false, 
						cache: false
				});
				}
			
			}
		}
	});
	
	
	
 </script>
</body>
</html>