<?php
header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');
header("Content-type:application/json");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rajesh";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



if ($_SERVER["REQUEST_METHOD"] == "GET") {
	echo("OKAY");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// echo $_POST['current'];
	$sql = "SELECT id, brand_name, product_name, filename, base_price FROM products_list";
	$result = $conn->query($sql);
	$temp = $result -> fetch_all(MYSQLI_ASSOC);
	$json_temp = json_encode($temp);
	print_r("$json_temp");
}

$conn->close();
?>