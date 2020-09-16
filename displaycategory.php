<html>
	<?php
	$raspuns = '';
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
	} ?>
	<body>
	<link rel="stylesheet" type="text/css" href="index_style.css">
	<?php
	include('connection/db.php');
	$query = "Select * from categorie_job where id_categorie  ORDER BY denumire_categorie";
	$result = mysqli_query($conn, $query);
	$query_favorite = "select fav.id_categorie from categorie_favorita as fav";
	$result_favorite = mysqli_query($conn, $query_favorite);
	?>
	<?php
	$categories = array();
	$favorite_categorii = array();
	while ($row = mysqli_fetch_assoc($result)) {
		$categories[] = $row;
	}
	while ($roww = mysqli_fetch_assoc($result_favorite)) {
		$favorite_categorii[] = $roww;
	}
	$categorii_favorite_array = array();
	foreach ($favorite_categorii as $cat_fav) {
		$categorii_favorite_array[] = $cat_fav['id_categorie'];
	}
	foreach ($categories as $row) {
		if (in_array($row['id_categorie'], $categorii_favorite_array)) 
		{

				$raspuns .= '<div style="float:left;" class="col-md-3">
			<ul class="category"> 
				<li>
					<div id="heartt"  class="heartt" style="margin-top:30px;">
						<div id="mydiv" class="categori red" data-id1="' . $row['id_categorie'] . '"><span name id="heartspan" class=" icon-heart icon-size"></span> ' . $row['denumire_categorie'] . '</div>
						</div>
					<div style="font-size: 15px; float:left;"></div><br>
				</li>
			</ul>
		</div>';
			} else {
				$raspuns .= '<div style="float:left;" class="col-md-3">
			<ul class="category">  
				<li>	
					<div id="heartt"  class="heartt" style="margin-top:30px;">
						<div id="mydiv" class="categori" data-id1="' . $row['id_categorie'] . '"><span name id="heartspan" class=" icon-heart icon-size"></span> ' . $row['denumire_categorie'] . '</div>
						</div>
					<div style="font-size: 15px; float:left;"></div><br>
				</li>
			  
			</ul>
		</div>';
			}

	}
	echo $raspuns;
	?>


	</body>

<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>
</html>