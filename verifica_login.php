<?php
	
	if(isset($_SESSION['email']))
	{
		echo $_SESSION['email'];
	}	
	else
	{
		echo "Nu esti logat";
	}
?>
	

