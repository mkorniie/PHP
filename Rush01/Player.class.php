<?PHP
require_once("Badass.class.php");
Class Player{
	public $playerName;
	public $playerNumber;
	public $Ship;
	public $points = 20;

	public static $verbose = False;

	public function __construct($Name, $Number){
		$this->playerName = $Name;
		$this->playerNumber = $Number;
		if ($Number == 1) {
			$ship_x = 3;
			$ship_y = 10;
		}
		else if ($Number == 2) {
			$ship_x = 140;
			$ship_y = 78;
		}
		else if ($Number == 3) {
			$ship_x = 3;
			$ship_y = 78;
		}
		else if ($Number == 4) {
			$ship_x = 140;
			$ship_y = 16;
		}

		$this->Ship = new Badass($ship_x, $ship_y);
		if (self::$verbose) {
			print("Player with name " . $this->playerName . " and number " . $this->playerNumber . "was created " . PHP_EOL);
		}
		return ($this);
	}


	public function __destruct(){
		if (self::$verbose) {
			print("Player with name " . $this->playerName . " and number " . $this->playerNumber . "was destroyed " . PHP_EOL);
		}
		return ;
	}

	public static function doc() {
    	print(file_get_contents('Player.doc.txt') . PHP_EOL);
    }
}
?>