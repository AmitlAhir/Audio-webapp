<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Audios</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>

	<a href="view.php">Audios</a>
	<?php if (isset($_GET['error'])) {  ?>
		<p><?=$_GET['error']?></p>
	<?php } ?>
	 <form action="upload.php"
	       method="post"
	       enctype="multipart/form-data">

	 	<input type="file"
	 	       name="my_audio">

	 	<input type="submit"
	 	       name="submit" 
	 	       value="Upload">
	 </form>
	 
</body>
</html>