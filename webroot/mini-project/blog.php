<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title> Blog </title>
    <link rel="stylesheet" href="reset.css" type="text/css">
  <link rel="stylesheet" href="entry_design.css" type="text/css">




  </head>
  <body>
    <button> <a href="check_session.php?page=add_entry.html"> Add Entry </a></button>
    <button> <a href="logout.php"> Logout </a></button>
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
$year=$_GET['year'];

$month=$_GET['month'];
 
$counter=0;



if($month==="" or $year==="" or is_null($month) or is_null($year))
{
 $sql = "SELECT text,title,date,blogNum FROM blog";
}
else{
  $sql = "SELECT text,title,date,blogNum FROM blog WHERE month(date)=$month and year(date)=$year";
}

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
  echo "0 blog entries";
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
<form method="GET" action="blog.php">
  <fieldset>


<label>Month</label>
<SELECT  name="month">
  <option value=""> All</option>
  <option value="1" <?php if($month==="1"){echo "selected";}?>> January</option>
  <option value="2" <?php if($month==="2"){echo "selected";}?>> February</option>
  <option value="3" <?php if($month==="3"){echo "selected";}?>> March</option>
  <option value="4" <?php if($month==="4"){echo "selected";}?>> April</option>
  <option value="5" <?php if($month==="5"){echo "selected";}?>> May</option>
  <option value="6" <?php if($month==="6"){echo "selected";}?>> June</option>
  <option value="7" <?php if($month==="7"){echo "selected";}?>> July</option>
  <option value="8" <?php if($month==="8"){echo "selected";}?>> August</option>
  <option value="9" <?php if($month==="9"){echo "selected";}?>> September</option>
  <option value="10" <?php if($month==="10"){echo "selected";}?>> October</option>
  <option value="11" <?php if($month==="11"){echo "selected";}?>> November</option>
  <option value="12"<?php if($month==="12"){echo "selected";}?>> December</option>
</select>
<lable>Year</label>

<!-- in future versions the year will set dynamically according to the current year-->
<SELECT name="year">
  <option value=""> All</option>
  <option value="2021" <?php if($year==="2021"){echo "selected";}?>> 2021</option>
  <option value="2022" <?php if($year==="2022"){echo "selected";}?>> 2022</option>
  <option value="2023" <?php if($year==="2023"){echo "selected";}?>> 2023</option>
</select>
<button type="submit">Submit</button>

  </fieldset>
</form>
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
      <a href="check_session.php?page=delete_post.php&blogNum=<?php echo $blog[3][$counter]; ?>"> Delete </a>
        <?php
        $counter++;
         endwhile
        ?>


        </body>
        </html>

        </body>
        </html>
