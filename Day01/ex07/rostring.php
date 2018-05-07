#!/usr/bin/php
<?PHP
	include("../ex03/ft_split.php");
	if (sizeof($argv) >= 2)
	{
		$arr = ft_wosortsplit("$argv[1]");
		if (sizeof($arr) == 1)
		{
			$tr = trim($arr[0], " ");
			print("$tr\n");
		}
		else if (sizeof($arr) > 1)
		{
			$i = 2;
			$first = $arr[0];
			$line = $arr[1];
			while ($i < sizeof($arr))
			{
				$line .= " ".$arr[$i];
				$i++;
			}
			$line .= " ".$first;
			print("$line\n");
		}
	}
?>