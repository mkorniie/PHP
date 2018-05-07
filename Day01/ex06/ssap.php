#!/usr/bin/php
<?PHP
	include("../ex03/ft_split.php");
	if (sizeof($argv) > 1)
	{
		$i = 1;
		$arr = array();
		while ($i < sizeof($argv))
		{
			$arr = array_merge($arr, ft_split("$argv[$i]"));
			$i++;
		}
		sort($arr);
		$i = 0;
		while ($i < sizeof($arr))
		{
			print("$arr[$i]\n");
			$i++;
		}
	}
?>