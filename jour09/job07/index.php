<?php
    $bdd = mysqli_connect('localhost','root','','jour08');
    mysqli_set_charset($bdd , 'utf8');
    $requete = mysqli_query($bdd,"SELECT SUM(superficie) FROM etages AS superficie_totale");
    $etages= mysqli_fetch_all($requete, MYSQLI_ASSOC);
var_dump($etages);
?>
<!doctype html>
<html lang= "en">
    <head>
        <title>tableau sql php</title>
    </head>
    <body>
        <table cellspacing="3", border=2>
            <thead>
            
                <th>superficie_totale</th>
                
            </thead>
        
    </body>
    <tbody>
        <?php
        foreach($etages as $etage => $value){
            echo'<tr>';
    
                echo '<td>' .$value["superficie_totale"]. '</td>';

            echo '</tr>'; 
        }
        ?>
    </table>
    </tbody>




</html>
