<?php
if(session_status()!=="PHP_SESSION_ACTIVE")
{
  header("Location:login_blog.html");
  exit();

}
else{
  header("Location:add_entry.html");
}?>
