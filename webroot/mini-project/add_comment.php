<?php

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
$comment=$_GET['comment'];
$sql="INSERT INTO comments (comment)
VALUES('$comment')";
if ($conn->query($sql) === TRUE) {
echo "Blog entry Added";
}

 else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
header("Location:view_post.php");
?>
