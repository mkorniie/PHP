#!/usr/bin/php
<?PHP

if (sizeof($argv) == 2)
{
	$file = $argv[1];
	$fd = fopen("$file", "r");
	if ($fd > 0)
	{
		while($line = fgets($fd))
		{
			$arr_cut = preg_grep("/<a.*>.*<\/a>/", $line);
			$cut = ft_combine($arr_cut);
			print(preg_replace("/<a.*>.*<\/a>/", $cut, $line));
		}
	}
	// strtoupper("Hello WORLD!");
}

?>