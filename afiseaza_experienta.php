 <?php
	include('connection/db.php');
	$raspuns = '';
	$query=mysqli_query($conn,  "select * from experienta");
	if(mysqli_num_rows($query)>0)
	{	while($row=mysqli_fetch_array($query))
		{ 
			$raspuns .='
			<option class="category"  data-id1="' .$row['id_experienta'].'">'.$row['nivel']. '</option>';
		}
	}
	echo $raspuns;
	
?>