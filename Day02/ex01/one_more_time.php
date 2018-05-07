#!/usr/bin/php
<?PHP
	if (sizeof($argv) > 1)
	{
		$time = $argv[1];
		$time = preg_replace("/[lL]undi/", "Monday", $time);
		$time = preg_replace("/[mM]ardi/", "Tuesday", $time);
		$time = preg_replace("/[mM]ercredi/", "Wednesday", $time);
		$time = preg_replace("/[jJ]eudi/", "Thursday", $time);
		$time = preg_replace("/[vV]endredi/", "Friday", $time);
		$time = preg_replace("/[sS]amedi/", "Saturday", $time);
		$time = preg_replace("/[dD]imanche/", "Sunday", $time);
		
		$time = preg_replace("/[jJ]anvier/", "January", $time);
		$time = preg_replace("/[fF]évrier/", "February", $time);
		$time = preg_replace("/[mM]ars/", "March", $time);
		$time = preg_replace("/[aA]vril/", "April", $time);
		$time = preg_replace("/[mM]ai/", "May", $time);
		$time = preg_replace("/[jJ]uin/", "June", $time);
		$time = preg_replace("/[jJ]uillet/", "July", $time);
		$time = preg_replace("/[aA]oût/", "August", $time);
		$time = preg_replace("/[sS]eptembre/", "September", $time);
		$time = preg_replace("/[oO]ctobre/", "October", $time);
		$time = preg_replace("/[nN]ovembre/", "November", $time);
		$time = preg_replace("/[dD]écembre/", "December", $time);
		$res = strtotime($time);
		if ($res)
		{
			print($res);
			print("\n");
		}
		else
			print("Wrong Format\n");
	}
?>