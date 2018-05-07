#!/usr/bin/php
<?PHP
	if (sizeof($argv) !== 4)
	{
		print("Incorrect Parameters\n");
	}
	else
	{
		$arg1 = trim($argv[1]);
		$operator = trim($argv[2]);
		$arg2 = trim($argv[3]);

		if (strlen($operator) == 1)
		{
			if ($operator[0] == '+')
			{
				print($arg1 + $arg2);
				print("\n");
			}
			else if ($operator[0] == '-')
			{
				print($arg1 - $arg2);
				print("\n");
			}
			else if ($operator[0] == '*')
			{
				print($arg1 * $arg2);
				print("\n");
			}
			else if ($operator[0] == '/')
			{
				print($arg1 / $arg2);
				print("\n");
			}
			else if ($operator[0] == '%')
			{
				print($arg1 % $arg2);
				print("\n");
			}
		}
	}
?>