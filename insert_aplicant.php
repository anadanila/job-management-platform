<?php
	include('connection/db.php');
	
	$id_aplicant=$_POST['aplicant_curent'];
	$id_job=$_POST['id_job'];
	$nume=$_POST['nume'];
	$prenume=$_POST['prenume'];
	$email=$_POST['email'];
	$data=$_POST['data']; 
	$telefon=$_POST['telefon'];
	
	$filename = $_FILES['file']['name']; 
	$location = "files/".$filename; 
	$file = $_FILES["file"]["tmp_name"];
	move_uploaded_file($_FILES['file']['tmp_name'], $location);
	$sql="INSERT INTO job_aplicat(id_aplicant, id_job, nume, prenume, email, data_nastere, CV, telefon) 
	VALUES('$id_aplicant', '$id_job', '$nume', '$prenume', '$email', '$data', '$filename', '$telefon')";
	if(mysqli_query($conn, $sql))
	{
		echo "<div class='alert alert-success'>Ai aplicat cu succes!</div>";
		
	}
	else
	{
		echo "<div class='alert alert-danger'>Ai aplicat deja!</div>";

	} 

?>