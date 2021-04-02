<!DOCTYPE HTML>
<head>
  <meta charset="utf-8">
  <title> </title>
</head>
<?php
echo $_GET["username"];
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
$sql="SELECT username FROM LOGIN";
if($result = $conn->query($sql){
  while($row=$result->fetch_assoc()){
    $print= $row["col1"];
  }
  echo $print;
}

 ?>
