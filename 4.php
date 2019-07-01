<?php

function intersection($arr1, $arr2) {
    $arr = array();
    $res = array();
    foreach ($arr1 as &$value) {
        $arr[$value] = true;
    }

    foreach ($arr2 as &$lookup) {
        if (isset($arr[$lookup])) {
            $res[] = $lookup;
        }
    }
    return $res;
}

$a = array(1, 4, 'a', 'b', 'c', 'd');
$b = array('c', 'd', 'e', 4, 8);

$r = intersection($a, $b);

print_r($r);