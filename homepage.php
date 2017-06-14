<?php
	if( $_POST["location"] ) {
		$location = $_POST["location"];
		header( "Location:$location" );
		
		exit();
	}
	
?>
<html>
	<body>
	
		<p>Choose a screen to represent:</p>
		
		<form action = "<?php $_SERVER['PHP_SELF'] ?>" method ="POST">
			<select name = "location">.
			
				<option value = "/options/image.html">
					images
				</option>
				
				<option value = "/options/slideshow.php">
					slideshows
				</option>
				
				<option value = "/options/video.php">
					videos
				</option>
				
			</select>
			<input type = "submit" />
		</form>


		<h2><a href = "logout.php">Sign Out</a></h2>
		
	</body>
</html>