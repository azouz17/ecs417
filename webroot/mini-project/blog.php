<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title> Blog </title>
    <link rel="stylesheet" href="reset.css" type="text/css">
  <link rel="stylesheet" href="entry_design.css" type="text/css">
  </head>
  <body>
    <button> <a href="login_blog.html"> Add Entry </a></button>
    <button> <a href="portfolio.html">Portfolio</a></button>
    <?php
    $title= $_GET["title"];
    $text=$_GET["text"];
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
    date_default_timezone_set('UTC');
    $date=date('m/d/Y h:i:s',time());
    $sql= "INSERT INTO blog (text,title,date)
    VALUES('$text','$title','$date')";
    if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
     ?>
    <h1> Blog Entries: </h1>
    <div>
      <h3> Test entry:</h3>
      <h6> March-6-2021</h6>
      <p> This is a test entry for the first entry of the blog. i am writing anything just to fill the space and
        hopefully the p container will indent to a new line very soon right about now</p>
        </div>
        <?php

      ?>
        </body>
        </html>
