<?php
	$raspuns='';
	include('connection/db.php');
	if($_GET['companie']!='')
	{	
		$companie=$_GET['companie'];
		$query=mysqli_query($conn,  "SELECT * from companie where denumire LIKE '%$companie%' ");
		
	}
	else
	{
		$query=mysqli_query($conn,  "SELECT * from companie");

	}	
	while($row=mysqli_fetch_array($query))
	{ 
			$raspuns .=' <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
							                            
								<div style="width:200px;" class="job-post-item-header d-flex align-items-center">				
									<h2 class="mr-3 text-black h3">' .$row["denumire"]. '</h2>
								</div>
								<div  class="job-post-item-body d-block d-md-flex">
									<div><span class="icon-layers"></span>' .$row["descriere"]. '</div>
								</div>
							    <div class="ml-auto d-flex">
								<div data-id2="' .$row['id_admin'].'" id="vezi_joburi_companie" class="btn btn-primary py-2 mr-1">Vezi joburi</div>
							</div>
						</div>';
	}					
			echo $raspuns;				
		
		 
		
	
?>