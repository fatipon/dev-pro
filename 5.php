<?php
    $myarray = array(1,2,3,4,5,6,7,8,9,10);
    $total = count($myarray);
    $new_array = array();
    foreach($myarray as $key => $value)  {
               if(($key%2) == 0 ){
                $new_array[] = $value;
         }
    }
    print_r ($new_array)
  ?>