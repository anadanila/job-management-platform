 <?php
			
	include('connection/db.php');
	$raspuns = '';
	$query=mysqli_query($conn,  "select distinct judet, id_job from job group by judet");
	if(mysqli_num_rows($query)>0)
	{	while($row=mysqli_fetch_array($query))
		{ 
			$raspuns .='
			<option class="oras" value="' .$row['id_job'].'"  data-id1="' .$row['id_job'].'">'.$row['judet']. '</option>';
		}
	}
	echo $raspuns;
	
	?>