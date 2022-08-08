<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Uploaded Audios</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>

	<a href="index.php">Uploaded Audios</a>

	<div class="alb">
		<?php 
		 include "db_conn.php";
		 $sql = "SELECT * FROM audios ORDER BY id DESC";
		 $res = mysqli_query($conn, $sql);

		 if (mysqli_num_rows($res) > 0) {
		 	while ($audio = mysqli_fetch_assoc($res)) { 
		 ?>
		 		
	        <audio src="uploads/<?=$audio['audio_url']?>" 
	        	   controls>
	        	
	        </audio>

	    <?php 
	     }
		 }else {
		 	echo "<h1>Empty</h1>";
		 }
		 ?>
	</div>
	
</body>
</html>