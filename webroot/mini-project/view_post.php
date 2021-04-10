<?php

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
$blogNum= $_GET["blogNum"];
$sql = "SELECT text,title,date FROM blog
WHERE blogNum=$blogNum";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  $row = $result->fetch_assoc();

    $title=$row["title"];
    $text=$row["text"];
    $date=$row["date"];


} else {
  echo "Post Not Found";
}
$comments=array(
  array(),array()
);
$counter=0;
$sql1="SELECT text,commentId FROM commnets WHERE blogNum=$blogNum";

$result1= $conn->query($sql1);
if ($result1->num_rows > 0) {
  // output data of each row
  while($row = $result1->fetch_assoc()) {

    $comments[0][$counter]=$row["text"];
    $comments[1][$counter]=$row["commentId"];

    $counter++;
  }
}
$conn->close();

?>
<!DOCTYPE HTML>
<html>
<head>
  <title> Blog post</title>
  <link rel="stylesheet" href="reset.css" type="text/css">
<link rel="stylesheet" href="poststyle.css" type="text/css">
</head>
<body>
  <h1> Blog Post</h1>
  <div>
    <h3><?php echo $title; ?></h3>
    <p><?php echo $text; ?></p>
    <h5><?php echo $date; ?></h5>
    </div>
    <table>
      <?php
      $i=0;
      while( $i<$counter) :
        ?>
      <tr>
        <td><?php echo $comments[0][$i];?></td>
        <td><a href="check_delete.php?blogNum=<?php echo $blogNum;?>&commentId=<?php echo $comments[1][$i] ;?>"> Delete</a></td>

      </tr>
      <?php $i++;
       endwhile?>
    </table>
    <form method="GET" action="check_session_comment.php">
      <fielset>
        <label>Comment:</label> <br>
        <textarea type="text" name="comment" rows="3" cols="20"></textarea>
        <input type="hidden" name="blogNum" value="<?php echo $blogNum?>">
        <br>
        <button type="submit">Add comment </a></button>
      </fielset>
    </form>

  </body>
  </html>
