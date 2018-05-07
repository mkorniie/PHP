<?php
require_once("Game.class.php");
require_once("Obstacle.class.php");
require_once("Player.class.php");

	$n = (int)$_SESSION['numPlayers'];
	for ($i = 0; $i < $n ; $i++) {
		$playerName = $_SESSION['player' . ($i + 1)];
		echo $playerName . PHP_EOL;
		$players[] = new Player($playerName, ($i + 1));
	}
	print_r($players);
	$numObstacles = 3;

	//x: 1500
	//y: 1000
	$obst = array(
				array(70, 60, 100, 300),
				array(80, 60, 200, 700),
				array(80, 60, 200, 500),
				array(60, 80, 700, 200),
				array(80, 80, 750, 500),
				array(80, 60, 1200, 400));
				// array(70, 70, ),
				// array(),
				// array(),
				// array())

	// Obstacle::$verbose = True;
	// Game::$verbose = True;
	for ($i = 0; $i < $numObstacles; $i++) { 
		$obstacles[] = new Obstacle($obst[$i][0], $obst[$i][1],
			$obst[$i][2], $obst[$i][3]);
	}

	// print_r($obstacles);

	$game = new Game(array('players' => $players,
		'obstacles' => $obstacles));
	// print_r($game);
?>

<script>
	var game = JSON.parse('<?php echo json_encode($game) ?>');
</script>