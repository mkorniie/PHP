<?PHP
Class Obstacle{
	public $height;
	public $width;
	public $pos_x;
	public $pos_y;

	public static $verbose = False;

	public function __construct($h, $w, $x, $y){
		$this->height = $h;
		$this->width = $w;
		$this->pos_x = $x;
		$this->pos_y = $y;
		if (self::$verbose) {
			print("Obstacle was created: " . $h . " " . $w 
				. " ". $x . " ". $y . PHP_EOL);
		}
		return ($this);
	}

	public function __destruct(){
		if (self::$verbose) {
			print("Obstacle was destroyed " . PHP_EOL);
		}
		return ;
	}

	public static function doc() {
    	print(file_get_contents('Obstacle.doc.txt') . PHP_EOL);
    }
}
?>