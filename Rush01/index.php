<?php
session_destroy();
include_once("install.php");
include("leaderTable.php");
?>
<link rel="stylesheet" href="css/index.css" type="text/css">

<br>
<a href="confirmUsers.php?players=2">2player mode</a> <br>
<a href="confirmUsers.php?players=3">3player mode</a> <br>
<a href="confirmUsers.php?players=4">4player mode</a> <br>