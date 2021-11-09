<?php
function bonjour($jour){
   if($jour===true){
       echo "bonjour";
       return (true);
   }
   else if($jour ===false){
       echo "bonsoir";
       return ( false);
   }
        return ($jour);

}
bonjour(false)









?>