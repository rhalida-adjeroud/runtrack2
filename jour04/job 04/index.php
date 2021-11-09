<?php
var_dump($_POST);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
<body>

<form action="index.php" method="POST">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname" value=""><br><br>
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname" value=""><br><br>
  <input type="submit" value="Submit">
</form> 
<table>
<thead>
              <tr>
                  <th>argument</th>
                  <th>valeur</th>
                  
              </tr>
          </thead>
          <tbody>
              <?php
          foreach($_POST as $k=> $value){
          echo "<tbody>
              <tr>
                <td>$k</td>
                <td>$value</td>
             </tr>";
            }
            ?>
          </tbody>
</table>


</body>
</html>