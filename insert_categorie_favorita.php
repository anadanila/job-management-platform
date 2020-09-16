<?php
	include('connection/db.php');
	session_start();
	if($_SESSION['email']==true)
	{
		 echo "<script type='text/javascript'>alert('nuuu!!!');</script>";
		$query0=mysqli_query($conn, "SELECT id_aplicant from aplicant where email_aplicant='{$_SESSION['email']}'");
		while($row=mysqli_fetch_array($query0))
		{
			$login=$row['id_aplicant'];	
			
		}
		$id=$_POST['id'];
		echo $id;
		$text=$_POST['text'];
		$sql="INSERT INTO categorie_favorita(id_categorie, id_aplicant) VALUES('$id', '$login')";
		if(mysqli_query($conn, $sql))
		{
			echo "Adăugată cu succes!";
			
		}
	}
	else
	{

		 echo "Trebuie să te loghezi!";

	}	
?>