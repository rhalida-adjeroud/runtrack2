<?php

function leetspeak($str){
    $nombre = ['a'=>'4','b'=>'8','e'=>'3','g'=>'6','l'=>'1','s'=>'5','t'=>'7','A'=>'4','B'=>'8','E'=>'3','G'=>'6','L'=>'1','S'=>'5','T'=>'7'];
    return (str_replace(array_keys($nombre), $nombre, $str));  
}
echo (leetspeak("Hello my friend"));
?>