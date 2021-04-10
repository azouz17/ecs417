
<?php
session_start();

//Expire the session if user is inactive for 30
//minutes or more.
$expireAfter = 1;

//Check to see if our "last action" session
//variable has been set.
if(isset($_SESSION['last_action'])){

    //Figure out how many seconds have passed
    //since the user was last active.
    $secondsInactive = time() - $_SESSION['last_action'];

    //Convert our minutes into seconds.
    $expireAfterSeconds = $expireAfter * 60;

    //Check to see if they have been inactive for too long.
    if($secondsInactive >= $expireAfterSeconds){
        //User has been inactive for too long.
        //Kill their session.
        session_unset();
        session_destroy();
        header("Location:portfolio.html");
    }

}

//Assign the current timestamp as the user's
//latest activity
$_SESSION['last_action'] = time();


 ?><?php
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
$date=date('Y/m/d H:i:s',time());


    $sql= "INSERT INTO blog (text,title,date)
VALUES('$text','$title','$date')";
if ($conn->query($sql) === TRUE) {
echo "Blog entry Added";
}


 else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
header("Location:blog.php");


?>
