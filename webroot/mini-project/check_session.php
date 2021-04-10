

<?php
session_start();
if(isset($_SESSION['state']))
{
  header("Location:add_entry.html");
  exit();

}
else{
  header("Location:login_blog.html");
  exit();
}?>
