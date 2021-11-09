<?php
var_dump($_GET);
foreach ($_GET as $key=> $value){ 
    echo "$value" ." <br/>";
}




?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
<body>

<form action="index.php" method="get">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname" value=""><br><br>
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname" value=""><br><br>
  <input type="submit" value="Submit">
</form> 


</body>
</html>

