<?PHP
abstract class House{

	public function __construct(){
		return ;
	}

	public function introduce()
	{
		print("House " . $this->getHouseName() . " of " . $this->getHouseSeat() . " : " . "\"" . $this->getHouseMotto() . "\"" . PHP_EOL);
	}
	public function __destruct(){
		return ;
	}
}
?>