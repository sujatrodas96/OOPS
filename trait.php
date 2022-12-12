<?php
trait A
{
	function abc()
	{
		echo "this is parent class of A";
	}
}
trait B
{
    function mno()
    {
    	echo "this is parent class of B";
    }
}
class C 
{
    use A,B;
    function xyz()
    {
    	echo "this is child class of C";
    }
}
$obj= new C();
$obj->abc();
?>