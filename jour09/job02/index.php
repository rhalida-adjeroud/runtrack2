<?php
    $bdd = mysqli_connect('localhost','root','','jour08');
    mysqli_set_charset($bdd , 'utf8');
    $requete = mysqli_query($bdd,"select * FROM salles ");
    $salles = mysqli_fetch_all($requete, MYSQLI_ASSOC);

?>
<!doctype html>
<html lang= "en">
    <head>
        <title>tableau sql php</title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                <td>nom</th>
                <th>capacite</th>
                


                </tr>
            </thead>
        </table>
        
    </body>
    <tbody>
        <table cellspacing="10", border=5>
        <?php
        foreach($salles as $salle){
            
            echo '<tr><td>'.$salle['nom'].'<td><br/>';
            echo '<tr><td>'.$salle['capacite'].'<td><br/>';
            
           
           
        }
        ?>
        </table>
    </tbody>




</html>
