
<?php
session_start();

//Expire the session if user is inactive for 30
//minutes or more.
$expireAfter = 20;

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
$commentId=$_GET['commentId'];
$blogNum=$_GET['blogNum'];
echo $blogNum;
echo $commentId;

if(isset($_SESSION['loggedin'])&& isset($_SESSION['admin']))
{

  header("Location:delete_comment.php?commentId=$commentId&blogNum=$blogNum");
  exit();

}

else if(isset($_SESSION['loggedin'])){
  $message="cannot delete not admin";
  header("Location:login_delete.php?message=$message");
  exit();
}
else{
  header("Location:login_delete.php?commentId=$commentId&blogNum=$blogNum");
}
?>
