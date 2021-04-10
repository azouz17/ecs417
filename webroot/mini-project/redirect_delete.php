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
$login=array(
  array(),array(),array()
);
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  $counter=0;
    // output data of each row
    while($row = $result->fetch_assoc()){
      $login[0][$counter]=$row["username"];
      $login[1][$counter]=$row["password"];
      $login[2][$counter]=$row["admin"];
      if($login[0][$counter]===$user and $login[1][$counter]===$pass and $login[2][$counter]===1){

      session_start();
      $_SESSION['loggedin']="yes";
      $_SESSION['admin']="yes";
        header("Location:delete_comment.php?blogNum=$blogNum&commentId=$commentId");
      exit();
      }
      else if($login[0][$counter]===$user and $login[1][$counter]===$pass and $login[2][$counter]===0)
      {
        $message="cant delete not admin";
        header("Location:login_delete.php?message=$message&blogNum=$blogNum&commentId=$commentId");
        exit();
      }
      else{
        $message="incorrect login information";
        header("Location:login_delete.php?message=$message&blogNum=$blogNum&commentId=$commentId");
        exit();
      }
      $counter++;
    }
    }
    else {
    echo "0 results";
}


if($row["username"]===$user and $row["password"]===$pass){

session_start();
$_SESSION['loggedin']="yes";
$_SESSION['admin']="yes";
  header("Location:delete_comment.php?blogNum=$blogNum&commentId=$commentId");
exit();
}
else{

  header("Location:login_blog.php?blogNum=$blogNum&commentId=$commentId",true,301);
  exit();
}

$conn->close();


 ?>
