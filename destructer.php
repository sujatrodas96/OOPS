<?php
class Abc
{
		function __construct()
	{
		echo "this";
	}
		function Abc()
	{
		echo "is";
	}
		function __destruct()
	{
		echo "function";
	}
		function mno()
	{
		echo "a";
	}
}
$obj= new Abc();
$obj->Abc();
$obj->mno();
?>