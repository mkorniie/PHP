#!/usr/bin/php
<?PHP
	if (sizeof($argv) > 1)
	{
		print(trim(preg_replace("/  */", " ", $argv[1])));
		echo "\n";
	}
?>