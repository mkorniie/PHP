<?PHP
Class Tyrion extends Lannister{
	public function __construct(){
		parent::__construct();
		print("My name is Tyrion" . PHP_EOL);
		return ;
	}

	public function getSize() {
		return "Short";
	}

	public function __destruct(){
		return ;
	}
}
?>