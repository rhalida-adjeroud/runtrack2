<?PHP
$var = 0;
while($var  <= 1337){
    
    
if($var == 42){
    echo "<b><u>".$var."</u></b></br>";
}
    else if($var != 42){
        echo $var ."<br/>";
    }
    $var = $var + 1;
}

?>