<?PHP
	function ft_wosortsplit($str)
	{
		$i = 0;
		$start = 0;
		$list = array();
		$start_of_word = false;
		while ($i < strlen($str))
		{
			if (($str[$i] != ' ') && ($start_of_word == false))
			{
				$start_of_word = true;
				$start = $i;
			}
			if ($start_of_word == true && (($str[$i] == ' ') || ($i == (strlen($str) - 1))))
			{
				$length = $i - $start;
				if ($i == (strlen($str) - 1))
					$length++;
				array_push($list, substr($str, $start, $length));
				$start_of_word = false;
			}
			$i++;
		}
		return($list);
	}
	function ft_split($str)
	{
		$res = ft_wosortsplit($str);
		sort($res);
		return($res);
	}
?>