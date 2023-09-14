<?php
function test($str){
    $s = substr($str, strlen($str) - 1);
    return $s.$str.$s;
}
echo test("Red")."<br>";
echo test("Green")."<br>";
echo test("1")."<br>";
?>