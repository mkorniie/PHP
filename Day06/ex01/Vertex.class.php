<?php
require_once 'Color.class.php';

Class Vertex{
	private $_x = 0.00;
	private $_y = 0.00;
	private $_z = 0.00;
	private $_w = 1.00;
	private $_c;
	public static $verbose = false;

	public function __construct( array $kwargs )
	{
		$this->_c = new Color(array( 'red' => 255, 'green' => 255, 'blue' => 255 ));
		if (array_key_exists('x', $kwargs))
				$this->_x = intval($kwargs['x']);
		if (array_key_exists('y', $kwargs))
				$this->_y = intval($kwargs['y']);
		if (array_key_exists('z', $kwargs))
				$this->_z = intval($kwargs['z']);
		if (array_key_exists('w', $kwargs))
				$this->_w = intval($kwargs['w']);
		if (array_key_exists('color', $kwargs))
				$this->_c = $kwargs['color'];

		if (self::$verbose)
			print("Vertex( x: " . $this->_x . ", y: " . $this->_y . ", z:" . $this->_z . ", w:" . $this->_w . ", Color( red: " . $this->_c->red . ", green: " . $this->_c->green . ", blue: " . $this->_c->blue . " ) ) constructed" . PHP_EOL);
		return;
	}

	public function __destruct()
	{
		if (self::$verbose)
			print("Vertex( x: " . $this->_x . ", y: " . $this->_y . ", z:" . $this->_z . ", w:" . $this->_w . ", Color( red: " . $this->_c->red . ", green: " . $this->_c->green . ", blue: " . $this->_c->blue . " ) ) destructed" . PHP_EOL);
		return;
	}
	public function getx() {return ($this->_x);}

	public function get_y() {return ($this->_y);}

	public function get_z() {return ($this->_z);}

	public function get_w() {return ($this->_w);}

	public function get_c() {return ($this->_c);}

	public function set_x( $cord ) {$this->_x = $cord;}

	public function set_y( $cord ) {$this->_y = $cord;}

	public function set_z( $cord ) {$this->_z = $cord;}

	public function set_w( $cord ) {$this->_w = $cord;}

	public function set_c(Color $col) {$this->_c = $col;}

	public function __toString(){
		if (self::$verbose)
			$str = "Vertex( x: " . $this->_x . ", y: " . $this->_y . ", z:" . $this->_z . ", w:" . $this->_w . ", Color( red: " . $this->_c->red . ", green: " . $this->_c->green . ", blue: " . $this->_c->blue . " ) )";
			else
				$str = "Vertex( x: " . $this->_x . ", y: " . $this->_y . ", z:" . $this->_z . ", w:" . $this->_w . " )";
		return ($str);
	}

	static function doc(){
		$str = file_get_contents("Vertex.doc.txt");
		return ($str);
	}

}
?>