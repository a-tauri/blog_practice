<?php

class calcTriangle{
    function triangle($width,$height){
        $a = $width * $height / 2;
        return $a;
    }

    function rectangle($width,$height){
        $b = $width * $height;
        return $b;
    }

    function goukei($one,$two){
        $c = $one + $two ;
        return $c;
    }
    
}



$menseki1 = new calcTriangle();

$a = $menseki1->triangle(5,6);

echo $a;

$a = (int)$a;



$b = $menseki1->rectangle(7,8);

echo $b;

$b = (int)$b;



$c = $menseki1->goukei($a,$b);

echo $c;
