<?php
    $bdd = mysqli_connect('localhost','root','','jour08');
    mysqli_set_charset($bdd , 'utf8');
    $requete = mysqli_query($bdd,"select * FROM etudiants ");
    $etudiants = mysqli_fetch_all($requete, MYSQLI_ASSOC);

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
                <th>nom</th>
                <th>prenom</th>
                <th>naissance</th>
                <th>sexe</th>
                <th>email</th>


                </tr>
            </thead>
        </table>
        
    </body>
    <tbody>
        <?php
        foreach($etudiants as $etudiant){
            echo '<tr><td>'.$etudiant['nom'].'<td><br/>';
            echo '<tr><td>'.$etudiant['prenom'].'<td><br/>';
            echo '<tr><td>'.$etudiant['naissance'].'<td><br/>';
            echo '<tr><td>'.$etudiant['sexe'].'<td><br/>';
            echo '<tr><td>'.$etudiant['email'].'<td><br/>';
           
           
        }
        ?>
    </tbody>




</html>
