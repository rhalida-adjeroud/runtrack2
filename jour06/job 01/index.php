<?php
session_start();

if(!(isset($_SESSION['nbvisites']))){
    $_SESSION['nbvisites']= 0;


}
else{
    $_SESSION['nbvisites']++;
}

if(isset($_POST['reset'])){
    session_destroy();
    $_session_destroy['nbvisites']=0;
}
echo $_SESSION['nbvisites']  . "vous m'avait déja vue";




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



  