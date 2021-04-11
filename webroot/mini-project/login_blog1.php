<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title> Blog Login</title>
    <link rel="stylesheet" href="reset.css" type="text/css"/>
      <link rel="stylesheet" href="styleblog.css" type="text/css"/>
    </head>
    <body>
      <?php
$page=$_GET['page'];
$blogNum=$_GET['blogNum'];
$commentId=$_GET['commentId'];
$comment=$_GET['comment'];
       ?>
        <form method="GET" action="redirect.php">
          <fieldset>
            <h2> Log In:</h2>
            <table>
              <tr>
          <td>  <label> Username:</label> </td>
          <td>  <input required type="text" name="username"></td>
          </tr>
          <tr>
          <td>  <label> Password:</label></td>
          <td>  <input required type="password" name="password"></td>
          </tr>
          </table>
          <input type="hidden" name="page" value="<?php echo $page?>">
          <input type="hidden" name="blogNum" value="<?php echo $blogNum?>">
            <input type="hidden" name="commentId" value="<?php echo $commentId?>">
            <input type="hidden" name="comment" value="<?php echo $comment?>">
          <br>

            <button type="submit"> Submit </a></button>
            </fieldset>
            </body>
            </html>
