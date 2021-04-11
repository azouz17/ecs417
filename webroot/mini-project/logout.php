<?php
session_start();
session_unset();
session_destroy();
 ?>
 <!DOCTYPE HTML>
 <html>
 <head>
   <meta charset="utf-8">
   <title> logout</title>
 </head>
 <body>
   <style>
  #a1 {
  background-color: #4CAF50;
  border:3px black solid;
  position: absolute;
  margin-top: 7em;
  margin-left: 25em;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;

  cursor: pointer;
}
#a2{
  background-color: #4CAF50;
  border:3px black solid;
  color: white;
  position: absolute;
  margin-top: 7em;
  margin-left: 40em;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
}
h2{
  font-weight: bold;
  text-align:center;

}
</style>
   <h2 style="font-weight:bold color:blue"> You have been logged out</h2>
   <button id="a1" ><a href="portfolio.html"> Back to Portfolio</a></button>
   <button id="a2"><a href="blog.php"> Back to Blog</a></button>
 </body>
 </html>
