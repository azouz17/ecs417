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
   <h2 style="font-weight:bold color:blue"> You have been logged out</h2>
   <button><a href="portfolio.html"> Back to Portfolio</a></button>
   <button><a href="blog.php"> Back to Blog</a></button>
 </body>
 </html>
