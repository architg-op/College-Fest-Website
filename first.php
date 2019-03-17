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

$leader=$_POST['tLeaderName'];
$teamname=$_POST['tname'];
$eventname=$_POST['ename'];
$collegename=$_POST['univ'];
$contact=$_POST['pNumber'];
$member1=$_POST['m2name'];
$member2=$_POST['m3name'];
$member3=$_POST['m4name'];
$member4=$_POST['m5name'];

echo "sacas";
$sql = "INSERT INTO Registered Students(Team)(collegeName,teamName,leaderName,m2Name,m3Name,m4Name,m5Name,event) VALUES ('$collegename', '$teamname','$leader','$member1','$member2','$member3','$member4','$eventname')";
if ($conn->query($sql) === TRUE) {
    header('Location:main.html');
} else {
     echo "Error: account already exists";
	 header('Location:first.php');
}
?>