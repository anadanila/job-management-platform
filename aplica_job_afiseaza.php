<?php
include('connection/db.php');
$raspuns='';

$id_job=$_GET['id_job'];
session_start();
if(isset($_SESSION['email']))
{
}
else
{
	header('location:login/login.php');
}  


	$query=mysqli_query($conn, "SELECT * from job where id_job='$id_job'");
	while($row=mysqli_fetch_array($query))
		{ 
			$raspuns .='<h2 class="mb-3"><div>' .$row['denumire_job']. '</div></h2>
						<h1 class="mb-3"><div>'.$row['descriere_job'].'</div></h1>';
						
		}
		echo $raspuns;
	
	

?>


     