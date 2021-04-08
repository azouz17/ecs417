<?php
$title= $_GET["title"];
$text=$_GET["text"];
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
date_default_timezone_set('UTC');
$date=date('Y/m/d H:i:s',time());


    $sql= "INSERT INTO blog (text,title,date)
VALUES('$text','$title','$date')";
if ($conn->query($sql) === TRUE) {
echo "Blog entry Added";}

} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
