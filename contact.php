<html>
	<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	</head>
	<body>
	<?php
		include('include/header.php');
		include('include/h-header.php');
	?>
   
   

    <section class="ftco-section contact-section bg-light">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3">Informații de contact</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Telefon:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Email:</span> info@smartstart.com</a></p>
          </div>
          <div class="col-md-3">
          </div>
        </div>
		<script>
		  
			$(document).ready(function(){
			 $("#submit").one('click',function(){
				 
				if(($('input[name="name"]').val()=="")|| ($('input[name="email"]').val()=="") || ($('input[name="subject"]').val()=="") || ($('input[name="message"]').val()==""))
				{   
					validateContent="<div class='alert alert-danger'>Nu lăsa câmpuri goale</div>"	
					$('#validate').append($(validateContent))
					event.preventDefault();
					
					
				}
				else
				{
					
					var data=$(contact_form).serialize();
					
			
					$.ajax({
						  type: "POST",
						  url: "phpmailer_contactus.php",
						  data:data,
						  success:function(data){
										
						}
					
					});
					
					validateContent="<div class='alert alert-success'>Mesaj trimis cu succes</div>"	
					$('#validate').append($(validateContent))
					event.preventDefault();
				}
			   });
			});
		</script>
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
			
            <form action="" name="contact_form"  method="POST" class="bg-white p-5 contact-form">
			  <div id="validate"></div>	
              <div class="form-group">
                <input type="text"  name="name" class="form-control" placeholder="Numele tău">
              </div>
              <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Email-ul tău">
              </div>
              <div class="form-group">
                <input type="text" name="subject" class="form-control" placeholder="Subiect">
              </div>
              <div class="form-group">
                <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Mesaj"></textarea>
              </div>
              <div class="form-group">
                <input type="submit"   name="submit" id="submit"  class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>
        </div>
      </div>
    </section>
	<?php

include('include/footer.php');
?>
</body>
</html>