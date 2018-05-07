<?PHP
	function ft_is_sort($arr)
	{
		$sorted = $arr;
		sort($sorted);
		$i = 0;
		while ($i < sizeof($sorted))
		{
			if ($sorted[$i]!== $arr[$i])
				return (false);
			$i++;
		}
		return (true);
	}
?>