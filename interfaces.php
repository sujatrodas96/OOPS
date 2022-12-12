<?php

interface parent1
{
	function calc($a, $b);
}


interface parent2
{
	function sub($a, $b);
}


//    Drive class            all interfaces
class childclass implements parent1,parent2
{
	function calc($a, $b)
	{
		echo $a + $b;
	}

    function sub($c, $d)
    {
    	echo $c - $d;
	}    

}

$test = new childclass();
$test->calc(10, 20);
$test->sub(20, 10);
?>