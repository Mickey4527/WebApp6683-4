<?php
function test($temp1 , $temp2)
{
    return $temp1 < 0 && $temp2 > 100 
           || $temp2 < 0 && $temp1 > 100;
}

var_dump(test(120,-1))."<br>";
var_dump(test(-1,120))."<br>";
var_dump(test(2,120))."<br>";

?>