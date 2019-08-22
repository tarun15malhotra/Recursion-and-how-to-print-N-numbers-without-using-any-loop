<?php 

/*
Recursion 

When a function call itself again and again then it id called as recursive funtion.

*/

# Recursion Example

function numbers($n,$max)
{
    if ($n<=$max)
    {
       echo $n.", ";
       numbers($n+1,$max);
    }
    else exit();
}

numbers(1,10);

?>