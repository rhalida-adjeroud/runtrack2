<?php
    $bdd = mysqli_connect('localhost','root','','jour08');
    mysqli_set_charset($bdd , 'utf8');
    $requete = mysqli_query($bdd,"SELECT SUM(capacite) FROM salles");
    $salles= mysqli_fetch_all($requete, MYSQLI_ASSOC);
var_dump($salles);
?>
<!doctype html>
<html lang= "en">
    <head>
        <title>tableau sql php</title>
    </head>
    <body>
        <table cellspacing="3", border=2>
            <thead>
            
                <th>“capacite_totale”</th>
                <th></th>
                
                
            </thead>
        
    </body>
    <tbody>
        <?php
         foreach($salles as $salle){
            echo'<tr>';
                 foreach($salles as $salle => $value){
                    echo '<td>' .$salle. '</td>';
            }
            echo '</tr>'; 
        }
        ?>
    </table>
    </tbody>




</html>