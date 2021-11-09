

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>tableau</title>
    </head>
    <body>
        <?php
        //variable str chaine de caractére
        $str = "mot en lettre";
        //variable Booleen
        $myBool = true ;
        $Baby = false ;
        //var entier
        $nombre = "entier";
        $info = 22 ;
        //var decimal
        $flottante = 2.50 ;
        ?>
        <table>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th> 
            </tr>
            <tr>
                <td>booléen;</td>
                <td><?php echo "true "."false "; ?></td>
                <td><?php echo $myBool, $Baby;?></td>
               
            </tr>
            <tr>
                <td>entier;</td>
                <td><?php echo $nombre  ;?></td>
                <td><?php echo $info;?></td>
                
            </tr>
            <tr>
                <td>chaine de caractéres;</td>
                <td><?php echo $str;?>:</td>
                <td><?php echo "nom";?></td>
            </tr>
            <tr>
                <td>Nombre décimal;</td>
                <td><?php echo "nombre à virgule float:";?></td>
                <td><?php echo $flottante;?></td>
                <td></td>
            </tr>
        </table>

    </body>
</html>









