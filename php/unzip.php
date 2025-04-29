<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Unzip Archive</title>
</head>

<body>
	<?php
	echo '<h1>Extracting .. 😊</h1>';

	$zip = new ZipArchive;
	$res = $zip->open('data.zip');
	if ($res === TRUE) {
		$zip->extractTo('.'); // Extract to current directory
		$zip->close();
		echo '<br>Extracted!';
	} else {
		echo '<br>Failed!';
	}
	?>
</body>

</html>
