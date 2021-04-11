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

$comment=$_GET['comment'];
$page=$_GET['page'];
$blogNum=$_GET['blogNum'];
$commentId=$_GET['commentId'];
$sql="SELECT username,password,admin FROM login";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
  while($row = $result->fetch_assoc())
    {


if($row["username"]===$user and $row["password"]===$pass and $page==="add_comment.php")
{
  $_SESSION['loggedin']="yes";
  $_SESSION['time']=time();
  header("Location:$page?blogNum=$blogNum&commentId=$commentId&comment=$comment");
exit();
}

else if($row["username"]===$user and $row["password"]===$pass and $row['admin']===1){
  $_SESSION['admin']="yes";
  $_SESSION['loggedin']="yes";
  $_SESSION['time']=time();

  header("Location:$page?blogNum=$blogNum&commentId=$commentId");
exit();
}
else if($row["username"]===$user and $row["password"]===$pass and $row['admin']===0){
  $message="can login not admin"

  header("Location:login_blog1.php?page=$page&blogNum=$blogNum&commentId=$commentId&comment=$comment&message=$message",true,301);
  exit();
}
}
}
else {
$message="incorrect login credentials";
header("Location:login_blog1.php?page=$page&blogNum=$blogNum&commentId=$commentId&comment=$comment&message=$message",true,301);
}

$conn->close();


 ?>
