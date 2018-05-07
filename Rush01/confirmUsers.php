<?php
	if (is_null($_GET) || is_null($_GET['players'])) {
		header("Location: index.php");
	}
	$numPlayers = $_GET['players'];
	if ($numPlayers < 1 || $numPlayers > 4) {
		header("Location: index.php");
	}
	session_start();
	$_SESSION['numPlayers'] = $numPlayers;

	for ($i = 1; $i < $numPlayers + 1; $i++) { 
		$formBody .= "
		login$i: <input type=\"text\" name=\"login$i\" required=\"required\"
			pattern=\"[a-zA-Z\d]{1,8}\" title=\"Please match -> [a-zA-Z\d]{1,8}\"><br>
		password$i: <input type=\"password\" required=\"required\" name=\"password$i\"><br>
		<br>
		";
	}
	$formStart = "<form action=\"\" method=\"post\">";
	$formEnd = "<input type=\"submit\" value=\"start\"> </form>";
	echo $formStart . $formBody . $formEnd;

	include("addUsers.php");
?>

