<?php

    function heightTrigon($a,$b,$c){
        $s = round(($a + $b + $c) /2);
        $p = 2*(sqrt($s*($s-$a)*($s-$b)*($s-$c))) / $a;
        return $p;
    }


    function squere($a,$b,$c){
        $s = round(($a + $b + $c) /2);
        $p = sqrt($s*($s-$a)*($s-$b)*($s-$c));
        return $p;
    }
    
   function trigon($array){
    $stack = array();
      foreach($array as list($a, $b, $c)){
        $sum = squere($a , $b , $c);
        array_push($stack, $sum);
      }
      foreach($stack as $value){
        if($f < $value){
            $f = $value;
        }
      }
       foreach($stack as $i => $value){
           if($f == $value){
            $index = $i;
           }
       }
        $re = 2 * $f / $array[$index][0];
        return $re;
   }

    
    
