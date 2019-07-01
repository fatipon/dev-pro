<?php
function array_summ($in) {
    $sum = 0;
    foreach ($in as $key => $value){
        if (is_array($value)){
            $sum+= array_summ($value);
        } else {
            $sum+= $value;
        }
    }
    return $sum;
}

$in = array(1,2,7,4,[2,5,3,[32,5],3]);
echo array_summ($in);