<?php
$blogNum=$_GET['blogNum'];
$commentId=$_GET['commentId'];
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
$sql="DELETE FROM commnets WHERE commentId= ;";
if ($conn->query($sql) === TRUE) {

header("Location:view_post.php?blogNum=$blogNum");
}

 else {
echo "Error: " . $sql . "<br>" . $conn->error;
}




 ?>
