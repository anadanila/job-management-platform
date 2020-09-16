<?php
	include('connection/db.php');
	session_start();
	$query=mysqli_query($conn,"select * from aplicant where email_aplicant='{$_SESSION['email']}'");
	while($row=mysqli_fetch_array($query))
	{
		$id_aplicant=$row['id_aplicant'];
	}
	echo $id_aplicant;
?>