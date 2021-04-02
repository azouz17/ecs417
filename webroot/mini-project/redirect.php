<!DOCTYPE HTML>
<head>
  <meta charset="utf-8">
  <title> </title>
</head>
<?php
$user =$_GET["username"];
echo $user;
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
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
        echo "<br> id: ". $row["username"];

} else {
    echo "0 results";
}
if($row["username"]===$user){
  echo "TRUE";
}
else{
  echo "FALSE";
}

$conn->close();


 ?>
