<?PHP
	$user = "zaz";
	$pass = "jaimelespetitsponeys";
	header();
	if ($_SERVER['PHP_AUTH_USER'] == $user && $_SERVER['PHP_AUTH_PW'] == $pass) {
		?>
<html><body>
Hello Zaz<br />
<img src='<?php
	$a = base64_encode(file_get_contents('../img/42.png'));
	echo "data:image/png;base64,".$a;
?>'>
</body></html>
<?php
}
else {
		header("WWW-Authenticate: Basic realm=''Member area''");
		header("HTTP/1.0 401 Unauthorized");
?>
<html><body>That area is accessible for members only</body></html>     
<?php
}
?>