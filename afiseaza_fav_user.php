<?php
	session_start();
	include('connection/db.php');
	$nr_favorite = '';
	$query=mysqli_query($conn,  "select count(*) as nrfavorite from categorie_favorita where id_aplicant in (Select id_aplicant from aplicant where email_aplicant='{$_SESSION['email']}')");
	
	if(mysqli_num_rows($query)>0)
	{	while($row=mysqli_fetch_array($query))
		{ 
			$nr_favorite .=''.$row['nrfavorite']. '';
		}
	}
	echo $nr_favorite;
	?>