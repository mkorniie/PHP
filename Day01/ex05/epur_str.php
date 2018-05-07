#!/usr/bin/php
<?PHP
	if (sizeof($argv) == 2)
	{
		$i = 0;
		$start = 0;
		$start_of_word = false;
		$line = trim($argv[1], " ");
		$res = "";
		while ($i < strlen($line))
		{
			if (($line[$i] != ' ') && ($start_of_word == false))
			{
				$start_of_word = true;
				$start = $i;
			}
			if ($start_of_word == true && (($line[$i] == ' ') || ($i == (strlen($line) - 1))))
			{
				$length = $i - $start;
				if ($i == (strlen($line) - 1))
					$length++;
				$res = $res.' '.substr($line, $start, $length);
				$start_of_word = false;
			}
			$i++;
		}
		$res = trim($res, " ");
		print("$res\n");
	}
?>