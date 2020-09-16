<html>
<body>
<link rel="stylesheet" type="text/css" href="css/index_style.css">
<?php
	session_start();
	include('connection/db.php');
	$categorie_favorita = '';
	$query=mysqli_query($conn,  "SELECT * FROM categorie_favorita, categorie_job where categorie_favorita.id_categorie=categorie_job.id_categorie and id_aplicant=(SELECT id_aplicant from aplicant where email_aplicant='{$_SESSION['email']}')");
	
	if(mysqli_num_rows($query)>0)
	{	while($row=mysqli_fetch_array($query))
		{ 	
			$categorie_favorita .='
			
			<li style="text-align:center;" data-id1="' .$row['id_categorie'].'">'.$row['denumire_categorie']. '</li>
			
			<button style="display:inline; "  name="deleteBtn" data-id2="' .$row['id_categorie'].'" id="deleteBtn"  class="deleteBtn btn btn-danger">Sterge</button>
			<button style="display: inline-block; margin-right:0%;" id="jobCategorie" data-id1="' .$row['id_categorie'].'" id="deleteBtn" class="jobCategorie btn btn-success" >Joburi</button>
			';
		    
		}
		        
						  
	}
	echo $categorie_favorita; 
	?>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>	
</body>
</html> 