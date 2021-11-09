<?php
function calcule($a,$opération,$b){
    //echo $a.'+'.$b.'=' .$a+$b;
    switch($opération){
        case '+':
            $result = $a+$b;
            break;
        case '%':
            $result = $a%$b;
            break;
        case'-':
            $result = $a-$b;
            break;
        case'*':
            $result = $a*$b;
            break;
        case'/':
            $result = $a/$b;
            break;
        
           
           
    }
    return($result);
}

echo calcule(22,'+', 56)














?>