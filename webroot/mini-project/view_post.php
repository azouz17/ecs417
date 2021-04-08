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
$blogNum= $_GET['blogNum'];
$sql = "SELECT text,title,date FROM blog
WHERE blogNum=$blogNum";
$tqwer=1;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  $row = $result->fetch_assoc();

    $tile=$row["title"];
    $text=$row["text"];
    $date=$row["date"];


} else {
  echo "Post Not Found";
}
?>
<!DOCTYPE HTML>
<html>
<head>
  <title> Blog post</title>
  <link rel="stylesheet" href="reset.css" type="text/css">
<link rel="stylesheet" href="entry_design.css" type="text/css">
</head>
<body>
  <h1> Blog Post</h1>
  <div>
    <h3><?php echo $title; ?></h3>
    <p><?php echo $text; ?></p>
    <h6><?php echo $date; ?></p>
    </div>
  </body>
  </html>
