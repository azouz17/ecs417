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
$sql="SELECT username,password FROM login WHERE (username='$user' AND password='$pass')";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
      $row = $result->fetch_assoc();
      echo "inside main if statment <br>";

      echo $row['username']."<br>";
      echo $row['admin']."<br>";
      echo $row['password']."<br>";
      echo $user."<br>";
      echo $pass."<br>";

    if($row['username']===$user and $row['password']===$pass and $page==="add_comment.php")
    {
      echo "inside add comment if statment";
      $_SESSION['loggedin']="yes";
      $_SESSION['time']=time();
    //  header("Location:$page?blogNum=$blogNum&comment=$comment&commentId=$commentId");
      //exit();
    }
else  if($row['username']===$user and $row['password']===$pass and $row['admin']==='1')
  {
    echo "inside corrct username and password and admin is true";
    $_SESSION['loggedin']="yes";
    $_SESSION['admin']="yes";
    $_SESSION['time']=time();
  //  header("Location:$page?blogNum=$blogNum&comment=$comment&commentId=$commentId");
  //  exit();
  }
  else if($row['username']===$user and $row['password']===$pass and $row['admin']==='0')
  {
    echo "inside corrct username and password and admin is false";
    $message="cant login Not Admin";
    //header("Location:login_blog1.php?page=$page&blogNum=$blogNum&commentId=$commentId&comment=$comment&message=$message",true,301);
    //exit();
  }
}
else {
  echo $row['username']."<br>";
  echo $row['password']."<br>";
  echo $user."<br>";
  echo $pass."<br>";
  echo "<br> inside else statment no results for username and password";
$message="incorrect login credentials";

//header("Location:login_blog1.php?page=$page&blogNum=$blogNum&commentId=$commentId&comment=$comment&message=$message",true,301);
//exit();
}
echo"didnt enter any if or else statment";

$conn->close();


 ?>
