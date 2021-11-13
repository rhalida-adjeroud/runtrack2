<?php
    $bdd = mysqli_connect('localhost','root','','jour08');
    mysqli_set_charset($bdd , 'utf8');
    $requete = mysqli_query($bdd,"SELECT COUNT(*) AS nb_etudiants FROM etudiants ");
    $etudiants= mysqli_fetch_all($requete, MYSQLI_ASSOC);

?>
<!doctype html>
<html lang= "en">
    <head>
        <title>tableau sql php</title>
    </head>
    <body>
        <table cellspacing="3", border=2>
            <thead>
            
                <th>nb_etudiants</th>
                
            </thead>
        
    </body>
    <tbody>
        <?php
        foreach($etudiants as $etudiant){
            echo'<tr>';
                foreach($etudiant as $infos => $value){
                echo '<td>' .$value. '</td>';
                }
            echo '</tr>'; 
        }
        ?>
    </table>
    </tbody>




</html>
