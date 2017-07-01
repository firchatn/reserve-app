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
$name = $_POST['name'];
$mat = $_POST['mat'];
$sql = "UPDATE etat SET $v = 'oucuper' where jour = '$v2'  ";

$sql2 = "INSERT INTO reserver (matricule, client ,date ,time,type ) VALUES ('$mat','$name','2016/10/10', '10','inconnu');";
$conn->query($sql2);

if ($conn->query($sql) === TRUE) {
    echo "New record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	header("Location: index.php", true, 301);

$conn->close();
?>
