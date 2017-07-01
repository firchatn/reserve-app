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




$tel = $_POST['tel'];
$name = $_POST['name'];
$mat = $_POST['mat'];


$sql = "INSERT INTO complet(nom, mat, tel ) VALUES ('$name','$mat', '$tel'	);";

if ($conn->query($sql) === TRUE) {
    echo "New record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	header("Location: index.php", true, 301);

$conn->close();
?>
