<?php
$servername="localhost";
$username="root";
$password="mysql";
$dbname="College Fests";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
$leader=$_POST['pname'];
$eventname=$_POST['ename'];
$collegename=$_POST['univName'];
$contact=$_POST['pNumber'];
$sql = "INSERT INTO Registered Students(Single)('College Name','Name','Contact No.','Event Name') VALUES ('$collegename','$leader','$contact','$eventname')";
if ($conn->query($sql) === TRUE) {
    header('Location:main.html');
} else {
     echo "Error: account already exists";
	 header('Location:first.php');
}
?>