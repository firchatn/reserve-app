<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "lavage";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



$v = $_GET['id'];
$v2 = $_GET['day'];
echo $v2;
$sql = "UPDATE etat SET $v = 'oucuper' where jour = '$v2'  ";

if ($conn->query($sql) === TRUE) {
    echo "New record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	header("Location: index.php", true, 301);

$conn->close();
?>
