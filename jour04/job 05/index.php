<?php
var_dump($_POST);

if(isset($_POST ['fname']) && isset($_POST['password'])){

    if($_POST ['fname']=="john" && $_POST['password']== "Rambo"){ 

        echo "C'est pas ma guerre";
    }
    else{
        echo "votre pire cauchemar";
}

    
}




?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>page connection php</title>
    </head>
<body>

<form action="index.php" method="POST">
  <label for="fname">username:</label>
  <input type="text" id="fname" name="fname" value=""><br><br>
  <label for="password">password:</label>
  <input type="text" id="password" name="password" value=""><br><br>
  <input type="submit" value="Submit">
</form> 


</body>
</html>

