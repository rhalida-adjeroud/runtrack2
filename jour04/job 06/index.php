<?php

var_dump($_GET);

if(isset($_GET ['nombre'])){

    if($_GET['nombre']%2==0 ){ 

        echo "nombre paire";
    }
    else{
        echo "nombre impaire";
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

<form action="" method="GET">
  <label for="fname">username:</label>
  <input type="text" id="nombre" name="nombre" value=""><br><br>
  <input type="submit" value="Submit">
</form> 


</body>
</html>

