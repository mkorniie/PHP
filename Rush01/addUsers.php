<?php
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		echo "<br>" . "qqq $numPlayers" . "</br>";			//
		$numPlayers = $_SESSION['numPlayers'];
		echo "<br>" . "rrr $numPlayers" . "</br>";			//
		include("db.php");
		$conn = get_db();

		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		print_r($_POST);		//
		for ($i = 1; $i < $numPlayers + 1; $i++) { 
			$login = $conn->real_escape_string($_POST["login$i"]);
			$pass = $conn->real_escape_string($_POST["password$i"]);
			echo "<br>" . "$login" . "</br>";			//
			echo "<br>" . "$pass" . "</br>";			//
			$sql = "
			SELECT
				*
			FROM
				`users`
			WHERE
				`login` = '$login'
			LIMIT 1";

			$result = $conn->query($sql);

			if (!$result) {
				echo "SQL query error" . $conn->error;
			}

			if ($result->num_rows > 0) {
				echo "<br>" . "test14" . "</br>";			//
				$row = $result->fetch_assoc();
				if ($row["pass"] != $pass) {
					echo "<br>" . "$login wrote incorrect password" . "</br>";
					$is_incorrect = 1;
				}
				else {
					if (in_array($login, $already_exists) === True) {
						echo "<br>" . "$login already exists" . "</br>";
						$is_incorrect = 1;
					}
					$_SESSION["player$i"] = $login;
					$already_exists[] = $login;
				}
			}
			else {
				echo "<br>" . "test1" . "</br>";	//
				$sql = "
				INSERT INTO
					`users`
					(`login`, `pass`, `raiting`)
				VALUES
					('$login', '$pass', 0);
				";
				$result = $conn->query($sql);

				if (!$result) {
					echo "SQL query error" . $conn->error;
				}
				echo "<br>" . "test12" . "</br>";		//
				$_SESSION["player$i"] = $login;
				$already_exists[] = $login;
			}
		}
		$conn->close();
		if (!$is_incorrect) {
			header("Location: game.php");
		}
		echo "<br>";
	}
	else {
		echo "untest";
	}
?>