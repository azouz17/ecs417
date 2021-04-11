<?php
session_start();

//Expire the session if user is inactive for 30
//minutes or more.
$expireAfter = 30;

//Check to see if our "last action" session
//variable has been set.
if(isset($_SESSION['time'])){

  //Figure out how many seconds have passed
  //since the user was last active.
  $secondsInactive = time() - $_SESSION['time'];

  //Convert our minutes into seconds.
  $expireAfterSeconds = $expireAfter * 60;

  //Check to see if they have been inactive for too long.
  if($secondsInactive >= $expireAfterSeconds){
      //User has been inactive for too long.
      //Kill their session.

      header("Location:logout.php");
    exit();
  }

}
 ?>

<?php
session_start();
$comment=$_GET['comment'];
$page=$_GET['page'];
$blogNum=$_GET['blogNum'];
$commentId=$_GET['commentId'];
if(isset($_SESSION['loggedin'])and $page="add_comment.php")
{
  header("Location:$page?blogNum=$blogNum&commentId=$commentId&comment=$comment");
  exit();
}
else if(isset($_SESSION['admin']))
{
  header("Location:$page?blogNum=$blogNum&commentId=$commentId&comment=$comment");
  exit();

}
else{
  header("Location:login_blog1.php?page=$page&blogNum=$blogNum&commentId=$commentId&comment=$comment");
  exit();
}?>
