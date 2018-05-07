<?php

Class Color {
	public $red = 0;
	public $green = 0;
	public $blue = 0;
	public static $verbose = false;

	public function __construct( array $kwargs )
	{
		if (array_key_exists("rgb", $kwargs))
		{
			$temp = intval($kwargs['rgb']);
			$this->red = $temp >> 16;
			$this->green = ($temp - ($this->red << 16)) >> 8;
			$this->blue = $temp - ($this->red << 16) - ($this->green << 8);
		}
		else
		{
			if (array_key_exists('red', $kwargs))
				$this->red = intval($kwargs['red']);
			if (array_key_exists('green', $kwargs))
				$this->green = intval($kwargs['green']);
			if (array_key_exists('blue', $kwargs))
				$this->blue = intval($kwargs['blue']);
		}
		if (self::$verbose)
			print("Color( red:	" . strval($this->red) . ", green:	" . strval($this->green) . ", blue:	" . strval($this->blue) . " ) constructed." . PHP_EOL);
		return;
	}

	public function __destruct()
	{
		if (self::$verbose)
			print("Color( red:	" . strval($this->red) . ", green:	" . strval($this->green) . ", blue:	" . strval($this->blue) . " ) destructed." . PHP_EOL);
		return;
	}

	public function __toString(){
		$str = "Color( red:	" . strval($this->red) . ", green:	" . strval($this->green) . ", blue:	" . strval($this->blue) . " )";
		return ($str);
	}

	static function doc(){
		$str = file_get_contents("Color.doc.txt");
		return ($str);
	}

	public function add( Color $rhs )
	{
		$rred = $rhs->red + $this->red;
		$rgreen = $rhs->green + $this->green;
		$rblue = $rhs->blue + $this->blue;
		$res = new Color(array( 'red' => $rred, 'green' => $rgreen  , 'blue' => $rblue  ));
		return $res;
	}


	public function sub( Color $rhs )
	{
		$rred = $this->red - $rhs->red;
		$rgreen = $this->green - $rhs->green;
		$rblue = $this->blue - $rhs->blue;
		$res = new Color(array( 'red' => $rred, 'green' => $rgreen , 'blue' => $rblue));
		return $res;

	}

	public function mult( $f ){
		$rred = $this->red * $f;
		$rgreen = $this->green * $f;
		$rblue = $this->blue * $f;
		$res = new Color(array( 'red' => $rred, 'green' => $rgreen  , 'blue' => $rblue  ));
		return $res;
	}


}
?>