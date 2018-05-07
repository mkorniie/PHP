<?PHP
$action = $_GET["action"];
$name = $_GET["name"];
$value = $_GET["value"];

if ($action == "set")
	if ($name && $value)
	{
		setcookie($name, $value, time() + (86400 * 30), '/');
		// if (setcookie($name, $value, time() + (86400 * 30), '/'))
		// 	echo "Cookie created!\n";
		// else
		// 	echo "Fail!\n";
	}
if ($action == "get")
{
	//???
	if ($_COOKIE[$name])
		echo "$_COOKIE[$name]\n";
	// else
	// 	echo "No cookie found\n";
}
if ($action == "del")
	if ($name)
	{
		setcookie($name, '', time() - 3600);
		// if (setcookie($name, '', time() - 3600))
		// {
		// 	echo "Cookie deleted successfully!!\n";
		// }
		// else
		// 	echo "Cookie del: failed!!\n";
	}
// http://10.112.5.12:8100
?>
