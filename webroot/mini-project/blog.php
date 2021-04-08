<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title> Blog </title>
    <link rel="stylesheet" href="reset.css" type="text/css">
  <link rel="stylesheet" href="entry_design.css" type="text/css">




  </head>
  <body>
    <button> <a href="check_session.php"> Add Entry </a></button>
    <button> <a href="portfolio.html">Portfolio</a></button>
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


$blog=array(
  array(),array(),array(),array()
);
$counter=0;
$sql = "SELECT text,title,date FROM blog";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    $blog[0][$counter]=$row["title"];
    $blog[1][$counter]=$row["text"];
    $blog[2][$counter]=$row["date"];
    $blog[3][$counter]=$row["blogNum"];
    $counter++;
  }
} else {
  echo "0 results";
}
 $conn->close();
$temp=0;
$increment=0;
$return_counter;

for($counter=0;$counter<count($blog[2]);$counter++)
{

  if($counter===0)
  {

  }

  else{

    $return_counter=$counter;
    $increment=$counter-1;

    for($x=$increment;$x>=0;$x--)
    {

$date1=$blog[2][$counter];

$date2=$blog[2][$x];


      if($date1>$date2)
      {

        $temp=$blog[2][$counter];
        $blog[2][$counter]=$blog[2][$x];
        $blog[2][$x]=$temp;
        $temp=$blog[0][$counter];
        $blog[0][$counter]=$blog[0][$x];
        $blog[0][$x]=$temp;
        $temp=$blog[1][$counter];
        $blog[1][$counter]=$blog[1][$x];
        $blog[1][$x]=$temp;
        $temp=$blog[3][$counter];
        $blog[3][$counter]=$blog[3][$x];
        $blog[3][$x]=$temp;


        $counter--;

      }
      else{
        ;
      }
      }

      $counter=$return_counter;
  }
}


?>

<h1> Blog Entries</h1>
<p style="color:black; font-weight: bold"> -Click on blog title to view full post and comments</p>
<?php
$counter=0;
while( $counter<count($blog[0])) :
  ?>
<a href="view_post.php?blogNum=<?php echo $blog[3][$counter];?>">
    <div>
      <h3> <?php echo $blog[0][$counter];?></h3>
      <h5> <?php echo $blog[2][$counter];?></h5>

        </div>
      </a>
        <?php
        $counter++;
         endwhile
        ?>


        </body>
        </html>

        </body>
        </html>
