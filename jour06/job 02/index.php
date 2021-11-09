<?PHP
var_dump('nbvisites');

$nbvisites=0;
if((!isset($_COOKIE['nbvisites']))){
    $nbvisites+1;
    setcookie('nbvisites', $nbvisites);
}
echo "bye, merci pour le tchek".  $_COOKIE['nbvisites'];
if((isset($_POST['reset']))){
    unset($_COOKIE['nbvisites']); 
}else{
    $_COOKIE['nbvisites']++;
   
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
<body>

<form action="" method="POST">
    <button type="submit" name="reset" value="submit"></button>
</form> 


</body>
</html>
