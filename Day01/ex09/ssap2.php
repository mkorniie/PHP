#!/usr/bin/php
<?PHP
	function ft_cmp($str1, $str2)
	{
		// >0 если нужно менять местами, т.е. строка 2 должна быть выше
		$priority1 = "AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz";
		$priority2 = "1234567890";

		$str1 = strtolower($str1);
		$str2 = strtolower($str2);
		if (strcmp($str1, $str2) == 0)
			return (0);
		$i = 0;
		while (($i < strlen($str1)) && ($i < strlen($str2)))
		{
			if ($str1[$i] !== $str2[$i])
			{
				$p11 = strchr($priority1, $str1[$i]);
				$p12 = strchr($priority1, $str2[$i]);
				$p21 = strchr($priority2, $str1[$i]);
				$p22 = strchr($priority2, $str2[$i]);
				if ($p11 != NULL || $p12 != NULL)
				{
					if ($p11 == NULL)
						return (1);
					if ($p12 == NULL)
						return (-1);
					return(strcmp($str1[$i], $str2[$i]));
				}
				if ($p21 != NULL || $p22 != NULL)
				{
					if ($p21 == NULL)
						return (1);
					if ($p22 == NULL)
						return (-1);
					return(strcmp($str1[$i], $str2[$i]));
				}
				return(strcmp($str1[$i], $str2[$i]));
			}
			$i++;
		}
		return (strlen($str1) - strlen($str2));
	}
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
		sort($arr, SORT_NATURAL);
		$i = 0;
		while ($i < (sizeof($arr)))
		{
			$z = 0;
			while ($z < (sizeof($arr) - $i - 1))
			{
				$cmp = ft_cmp($arr[$z], $arr[$z + 1]);
				if ($cmp > 0)
				{
					$x = $arr[$z];
					$arr[$z] = $arr[$z + 1];
					$arr[$z + 1] = $x;
				}
				$z++;
			}
			$i++;
		}
		$i = 0;
		$i = 0;
		while ($i < sizeof($arr))
		{
			print("$arr[$i]\n");
			$i++;
		}
	}
?>