<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title> TEst</title>
  <script src="moment.js"></script>
</head>
<body>
<form method="post" action="collect.php">
  <fieldset>
    <legend> Form</legend>
    <label> Name </lable>
      <input required type="text" name="name">
      <label> Birthday </lable>
        <input id="b" type="text" name="birthday">
        <button type="submit" onclick="alert(moment(document.getElementById(b).value, 'MM/DD/YYYY',true).isValid());"> Submit </button>
      </fielset>
    </form>
</body>
</html>
