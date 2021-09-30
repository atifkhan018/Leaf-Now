<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db     = "flower shop";

$conn = new mysqli($dbhost,$dbuser,$dbpass,$db);

if($conn->connect_error) {
	echo "connection was failed";
}
else{
	"connection was made";
	include('products.php');
}
?>



   