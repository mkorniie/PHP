<?php
session_start();
function draw_all() {
	$n = (int)$_SESSION['numPlayers'];
	for ($i = 0; $i < $n ; $i++) {
		$j = $i + 1;
		$player = $_SESSION['player' . ($i + 1)];
		echo "
		<div align=\"center\" class=\"players\" id=\"pl$j\">
			<h3>Player $j</h3>
			<p>Name:</p>
			<p name\">$player</p>
			<p>Points:</p>
			<p id=\"pp$j\">20</p>
		</div>
		";
	}
	echo "<div class=\"field\">";
	for ($i = 0; $i < $n; $i++) { 
		$j = $i + 1;
		echo "
		<img id=\"ship$j\" src=\"http://i1236.photobucket.com/albums/ff454/TaCoskun/Selfmade%20Star%20Trek%20based%20Wallpapers/raytracedcomposite2_web.png\">
		";
	}
	echo "</div>";
}
include("main.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Battle field RRRR!</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="js/script.js"></script>
</head>
<body>
<div class="wrapper">
<?php
	draw_all();
?>
</div>
</body>
</html>
<form action="index.php">
	<input type="submit" value="exit">
</form>