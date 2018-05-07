<?PHP
abstract Class Ship{
	public $name;
	public $pos_x;
	public $pos_y;
	public $w;
	public $h;

	public static $verbose = False;

	abstract public function __construct();

	abstract public function __destruct();

	abstract public static function doc();
}
?>