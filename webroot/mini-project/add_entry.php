<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title> Add entry</title>
  <link rel="stylesheet" href="reset.css" type="text/css"/>
    <link rel=" stylesheet" href="style_entry.css" type="text/css"/>

  </head>
  <body>
    <?php
    
?>
    <form id="form" method="get" action="blog.php" >
      <fieldset>
        <h1> Add Entry: </h1>
        <br>
        <label> Title:</label>
        <input id="a1" type="text" name="title">
        <br>

        <label> Entry text:</label> <br>

       <textarea id="a2" rows="10" cols="70" name="text"> </textarea>
       <br>

    <button id="submit" type="submit" onclick="check()">  Submit entry</button>
    <button id="cl" type="button" onclick="clear()"> Clear</button>

      </fieldset>
 <script src="clear.js"></script>
      </body>
      </html>
