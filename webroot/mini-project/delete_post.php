<?php
session_start();

$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("DATABASE_USER");
$dbpwd = getenv("DATABASE_PASSWORD");
$dbname = getenv("DATABASE_NAME");
// Creates connection
$conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
// Checks connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$blogNum=$_GET['blogNum'];
$sql="DELETE FROM commnets WHERE blogNum=$blogNum";
if ($conn->query($sql) === TRUE) {

;
}

 else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql1="DELETE FROM blog WHERE blogNum=$blogNum";
if ($conn->query($sql1) === TRUE) {

header("Location:blog.php");
}

 else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
