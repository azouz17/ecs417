<?php
session_start();
$user =$_GET["username"];
$pass =$_GET["password"];
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
$sql="SELECT admin FROM login";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

  $row = $result->fetch_assoc();
  echo "Inside if statment";
    // output data of each row
    echo $row['admin'];
  }
  else{
    echo "Inside else statment";
    echo"0 reults";
  }
  $conn->close();

  ?>
