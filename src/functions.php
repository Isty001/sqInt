<?php

Namespace Excercises\Squint;

class Integers{
    function take($elems, $collection) {
        $i = 0;
        $powArr = array();
        foreach($collection as $pow){
            $i++;

            if( $i<= $elems ){
                $powArr[] = $pow;
            } else {
                return $powArr;
                break;
            }
        }
    }

    function squaresOf($integers) {
        for($i=1; $i<=$integers; $i++){
            yield pow($i, 2);
        }
    }

    function integers($int) {
        return $int;
    }
}