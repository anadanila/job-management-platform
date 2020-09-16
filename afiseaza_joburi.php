<?php
	$raspuns='';
	include('connection/db.php');
	$denumire_job=$_GET['denumire_job'];
	$oras=$_GET['oras'];
	$experienta=$_GET['experienta'];
	$categorie=$_GET['categorie'];
	
	$query=mysqli_query($conn,  "SELECT * from job left join experienta on job.id_experienta=experienta.id_experienta
								where job.cuvant_cautare='$denumire_job' and job.oras='$oras' and experienta.nivel='$experienta' 
								and job.id_categorie='$categorie'");
	while($row=mysqli_fetch_array($query))
	{ 
			$raspuns .=' <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
							                            
								<div class="job-post-item-header d-flex align-items-center">				
									<h2 class="mr-3 text-black h3">' .$row["denumire_job"]. '</h2>
								</div>
								<div class="job-post-item-body d-block d-md-flex">
									<div class="mr-3">experiență minimă:' .$row['perioada_minima'].' ani</div>
									<div><span class="icon-my_location"></span> <span>' .$row["oras"].'</span></div>
									
								</div>
							
							<div class="ml-auto d-flex">
								<div data-id1="' .$row['id_job'].'" id="aplica" class="btn btn-primary py-2 mr-1">Aplică</div>
							</div>
						</div>';
								
			echo $raspuns;				
		
		 
		
	}
?>


