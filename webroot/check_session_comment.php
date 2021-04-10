<?php
session_start();

//Expire the session if user is inactive for 30
//minutes or more.
$expireAfter = 2;

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
if(isset($_SESSION['state']))
{
  header("Location:add_comment.php");
  exit();

}
else{
  header("Location:redirect_comment.php");
  exit();
}?>
