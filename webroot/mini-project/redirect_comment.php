<!DOCTYPE HTML>
<head>
  <meta charset="utf-8">
  <title> </title>
</head>

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
$sql="SELECT username,password,userId FROM login";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
    }
    else {
    echo "0 results";
}
$blogNum=$_GET['blogNum'];
$comment=$_GET['comment'];
if($row["username"]===$user and $row["password"]===$pass){


  header("Location:add_comment.php?blogNum=$blogNum&comment=$comment");
exit();
}
else{

  header("Location:login_blog.php?blogNum=$blogNum&comment=$comment",true,301);
  exit();
}

$conn->close();


 ?>
