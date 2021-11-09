<?PHP
session_start();
if((!isset($_cookies['nbvisites']))){
    $_cookies['nbvisites']=0;
}
else{
    $_cookies['nbvisites']++;
}
if((isset($_POST['reset']))){
    session_destroy();
    $_session_destroy['nbvisites']=0;
}
echo $_cookies['nbvisites'] . "bye, merci pour le tchek";

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
