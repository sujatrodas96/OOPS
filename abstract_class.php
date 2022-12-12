<?php

//Abstract Class
abstract class parentclass
{
	public $name;

	//define function but no implement here
	abstract protected function calc($a, $b);
}

//Drive Class
class childclass extends parentclass
{

	//calc function implemented here
	public function calc($c, $d)
	{
		echo "Hello";
	}
}

$test = new childclass();

//Variable Value Declare
$test->calc(10, 20);

?>