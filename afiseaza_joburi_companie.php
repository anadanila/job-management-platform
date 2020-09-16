<?php
	$raspuns='';
	include('connection/db.php');
	if($_GET['id_admin1']!='')
	{	$id_admin=$_GET['id_admin1'];
		$query=mysqli_query($conn,  "SELECT * from job j, experienta e where j.id_experienta=e.id_experienta 
		                             and j.id_admin='$id_admin'");
	
	
	while($row=mysqli_fetch_array($query))
	{ 
			$raspuns .=' <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
							                       
								<div class="job-post-item-header d-flex align-items-center">				
									<h2 class="mr-3 text-black h3">' .$row["denumire_job"]. '</h2>
								</div>
	                            <div class="mr-3">experiență minimă:' .$row['perioada_minima'].' ani</div>
								<div class="job-post-item-body d-block d-md-flex">
									
									<div style="inline-block"><span class="icon-my_location"></span> <span>' .$row["oras"].'</span></div><br>
								</div>
								
							   
							<div class="ml-auto d-flex">
								
								<div data-id1="' .$row['id_job'].'" id="aplica" class="btn btn-primary py-2 mr-1">Aplică</div>
							</div>
							
							<div class="job-post-item-body d-block d-md-flex">
							
							</div>
							
						</div>
						
						';
	}						
			echo $raspuns;				
		
		 
		
	
    }
?>