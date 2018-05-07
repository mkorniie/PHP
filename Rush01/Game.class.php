<?php
class Game
{
	public $players = array();
	public $numPlayers;
	public $obstacles = array();

	public static $verbose = False;

	public function __construct(array $kwargs) {
        if (array_key_exists('players', $kwargs)) {
            $this->players = $kwargs['players'];
            $this->numPlayers = count($this->players);
        }
        if (array_key_exists('obstacles', $kwargs)) {
            $this->obstacles = $kwargs['obstacles'];
        }
		if (self::$verbose) {
			printf("Game constructed." . PHP_EOL);
		}
	}

	public function __destruct() {
		if (self::$verbose) {
        	print_r($this);
			printf("Game destructed." . PHP_EOL);
		}
    }

    public static function doc() {
    	print(file_get_contents('Game.doc.txt') . PHP_EOL);
    }
}
?>