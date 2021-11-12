<?php
    $bdd = mysqli_connect('localhost','root','','jour08');
    mysqli_set_charset($bdd , 'utf8');
    $requete = mysqli_query($bdd,"select `nom`,`capacite` FROM salles ");
    $salles = mysqli_fetch_all($requete, MYSQLI_ASSOC);

?>
<!doctype html>
<html lang= "en">
    <head>
        <title>tableau sql php</title>
    </head>
    <body>
        <table cellspacing="3", border=2>
            <thead>
            
       
                <th>nom</th>
                <th>capacité</th>
        
            </thead>
        
    </body>
    <tbody>
        <?php
        foreach($salles as $salle){
            echo'<tr>';
            foreach($salle as $infos => $value){
            echo '<th>' .$value. '</th>';
            }
          echo '</tr>'; 
        }
        ?>
    </table>
    </tbody>




</html>
