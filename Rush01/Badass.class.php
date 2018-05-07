<?PHP
require_once("Ship.class.php");

Class Badass extends Ship{
	public $name = "Badass";
	public $pos_x;
	public $pos_y;
	public $w = 75;
	public $h = 40;

	public static $verbose = False;

	public function __construct($x, $y){
		$this->pos_x = $x;
		$this->pos_y = $y;
		if (self::$verbose) {
			print("Ship with name " . $this->name . ", size " . 
				$this->h . "x" . $this->w . 
				"and pos [x=" . $this->pos_x . ", y=" .
				 $this->pos_y  .  "]was created " . PHP_EOL);
		}
		return ($this);
	}

	public function __destruct(){
		if (self::$verbose) {
			print("Badass ship was destroyed " . PHP_EOL);
		}
		return ;
	}

	public static function doc() {
    	print(file_get_contents('Badass.doc.txt') . PHP_EOL);
    }
}
?>