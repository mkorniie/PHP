<?PHP
Class Lannister{

	public function __construct(){
		return ;
	}

		// get_class
	public function sleepWith($t){
		if (get_parent_class($t) == 'Lannister')
			print("Not even if I'm drunk !" . PHP_EOL);
		else
			print("Let's do this." . PHP_EOL);
		return;
	}

	public function __destruct(){
		return ;
	}
}
?>