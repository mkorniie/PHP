<?PHP
Class Jaime extends Lannister{

	public function sleepWith($t){
		if (get_parent_class($t) == 'Lannister')
		{
			if (get_class($t) == 'Cersei')
				print("With pleasure, but only in a tower in Winterfell, then." . PHP_EOL);
			else
				print("Not even if I'm drunk !" . PHP_EOL);
		}
		else
			print("Let's do this." . PHP_EOL);
		return;
	}

}
?>