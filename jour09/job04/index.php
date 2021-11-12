<?php
    $bdd = mysqli_connect('localhost','root','','jour08');
    mysqli_set_charset($bdd , 'utf8');
    $requete = mysqli_query($bdd,"SELECT * FROM `etudiants` WHERE `prenom` LIKE 'T%' ");
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
            
       
                <th>nom</th>
                <th>prenom</th>
                <th>naissance</th>      
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
