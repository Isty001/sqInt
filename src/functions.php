<?php

Namespace Excercises\Squint;

class Integers{

    public function __construct(){
        $this->powArr = array();
    }

    function take($elems, $collection) {
        foreach($collection as $pow){
            static $i = 0;
            $i++;

            if( $i<= $elems ){
                $this->powArr[] = $pow;
            } else {
                return $this->powArr;
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