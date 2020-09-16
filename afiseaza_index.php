 <?php
			
	include('connection/db.php');
	$raspuns = '';
	$query=mysqli_query($conn,  "select * from categorie_job");
	if(mysqli_num_rows($query)>0)
	{	while($row=mysqli_fetch_array($query))
		{ 
			$raspuns .='
			<option class="category" value="' .$row['id_categorie'].'"  data-id1="' .$row['id_categorie'].'">'.$row['denumire_categorie']. '</option>';
		}
	}
	echo $raspuns;
	
	?>