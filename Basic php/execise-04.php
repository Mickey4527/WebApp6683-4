<?php
function test($s)
{
    $ctr_aa = 0;
    $i = 0;

    while($i < (strlen($s) - 1)){
        if(substr($s, $i, 2) == "aa"){
            $ctr_aa++;
        }  
        $i++;
    }
    return $ctr_aa;
}

echo(test("bbaaccaag"))."<br>";
echo(test("jjkiaaasew"))."<br>";
echo(test("JSaaakoiaa"))."<br>";
?>