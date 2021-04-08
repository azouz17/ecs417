<?php
if(isset($_SESSION['state']))
{
  header("Location:login_blog.html");
  exit();

}
else{
  header("Location:add_entry.html");
}?>
