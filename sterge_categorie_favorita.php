<?php
	include('connection/db.php');
	$query=mysqli_query($conn, "delete from categorie_favorita where id_categorie='".$_POST['id']."'");
	if($query)
	{
		echo "Sters cu succes!";
	}
	else
	{
		echo "Nu se poate sterge!";

	}	

?>