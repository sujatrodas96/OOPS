<?php
class Person
{
	public $sname,$sage,$ssage;
function __construct($name,$wage)
{
  $this->sname=$name;
  $this->sage=$wage;
}
function setage($setage)
{
  $this->ssage=$setage;
}
function display()
{
	echo "my name is: ".$this->sname."<br>";
	return $this->sage-$this->ssage;
}
}
$obj= new Person("sujatro",24);
$obj->setage(2);
echo "my age is: ".$obj->display();
?>