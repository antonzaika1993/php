<?php

function squere($a,$b,$c){
    $s = round(($a + $b + $c) /2);
    $p = sqrt($s*($s-$a)*($s-$b)*($s-$c));
    if(is_nan($p)){
        return 'невозможные стороны';
    }
    else{
        return $p;
    }
}
function heightTrigon($a,$b,$c){
    $s = round(($a + $b + $c) /2);
    $p = 2*(sqrt($s*($s-$a)*($s-$b)*($s-$c))) / $a;
    if(is_nan($p)){
        return 'невозможные стороны';
    }
    else{
        return $p;
    }
}
 
function typeTrigon($a,$b,$c){
    if($a == $b and $b == $c){
        return 'Равносторонний треугольник';
    }
    else if($a !== $b and $b !== $c){
        return 'Разносторонний треугольник';
    }
    else{
        return 'Равнобедренный треугольник';
    }
}

    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];

  echo 'Площадь треугольника: ' . squere($a,$b,$c) . "<br>" . 'Высота треугольника: ' . heightTrigon($a,$b,$c) . "<br>" . "Тип треугольника: " . typeTrigon($a,$b,$c);