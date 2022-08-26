
<?php

// servername => localhost
// username => root
// password => empty
// database name => staff
$conn = mysqli_connect("localhost", "root", "","accounts");

if($conn){
	echo "connnection succefull";
}

$name = $_POST["name"];
$email = $_POST["email"];

$sql = "INSERT INTO subscribers(NAME , EMAIL) VALUES ('$name','$email')";
if(mysqli_query($conn, $sql)){
	echo "data added succefully";
}
?>