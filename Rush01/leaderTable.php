<?php
include("db.php");
$conn = get_db();

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "
SELECT
	`login`, `raiting`
FROM
	`users`
ORDER BY `raiting`
LIMIT 20";

$result = $conn->query($sql);

if (!$result) {
	echo "SQL query error" . $conn->error;
}

if ($result->num_rows > 0) {
	$i = 1;
    while($row = $result->fetch_assoc()) {
    	$tableBody .= "
    	<tr>
    		<th>$i</th>
    		<th>$row[login]</th>
    		<th>$row[raiting]</th>
    	</tr>
    	";
        $i++;
    }
}
else {
	$tableBody = "
	<tr>
		<td></td>
		<td>Empty</td>
		<td>Empty</td>
	</tr>";
}

$tableStart = "
<table id=\"leaderboard\" border=\"1\">
    <tr>
    	<th>Number</th>
    	<th>Login</th>
    	<th>Raiting</th>
    </tr>
	";

$tableEnd = "</table>";

echo $tableStart . $tableBody . $tableEnd; 

$conn->close();
?>