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
$blogNum=$_GET['blogNum'];
$comment=$_GET['comment'];
$commentId=$_GET['commentId'];
$sql="SELECT username,password,admin FROM login";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
    }
    else {
    echo "0 results";
}

if($row["username"]===$user and $row["password"]===$pass){

session_start();
$_SESSION['loggedin']="yes";
$_SESSION['admin']="yes";
$_SESSION['time']=time();
  header("Location:delete_post.php?blogNum=$blogNum&commentId=$commentId");
exit();
}
else{

  header("Location:login_post.php?blogNum=$blogNum&commentId=$commentId",true,301);
  exit();
}

$conn->close();


 ?>