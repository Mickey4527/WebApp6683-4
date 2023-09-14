<?php
function test($n)
{
    return $n % 3 == 0 || $n % 7 == 0;
}
var_dump(test(3))."<br>";
var_dump(test(14))."<br>";
var_dump(test(12))."<br>";
var_dump(test(37))."<br>";
?>