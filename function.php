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
    