<?php
$file = fopen("likes.txt", "r");

if(!$file){
  echo "ei saanud faili avada";
} else {
	$counter = (int)fread($file, 20);
  fclose($file);
}

if($_GET){
    if(isset($_GET['like'])){
        like();
    }
}

function like() {
	$file = fopen("likes.txt", "r");
	if(!$file){
	  echo "ei saanud faili avada";
	} else {
		$counter = (int)fread($file, 20);
	  fclose($file);
	  $counter++;
		$handle = fopen("likes.txt", "w");
	  fwrite($handle, $counter);
	  fclose($handle);
	}
}
?>

<html>
<head>
	<meta charset="utf-8"/>
	<title>EKSAM</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div id="wrap">
		<div id="content">
			<form action="index.php">
				<input type="submit" class ="button" name="like" value="LIKE" />
			</form>
			<div class="counter">
				<?="Likes: " . $counter;?>
			</div>
		</div>
	</div>
</body>
</html>
