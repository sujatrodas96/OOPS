<?php
class Test
{
  public $a=40;
  private $b=20; // the property or method can ONLY be accessed within the class
  protected $c=30; //the property or method can be accessed within the class and by classes derived from that class
  function demo()
  {
  	echo $this->a + $this->b;
  	echo $this->b; //here b is accessable because b is within the class.
  	echo $this->c;
  }
}
class Test1 extends Test 
//Test1 classes derived Test thats why c is accesable.
{
    function demo1()
    {
      echo $this->a;
  	  //echo $this->b; //same logic as per line 28.
      echo $this->c; //c is accesable due to the property or method can be accessed within the class and by classes derived from that class
    }
}
class Test2 extends Test1
{
   function demo2()
   {
   		echo $this->a - $this->c;
  	    // echo $this->b;
      //b is unable to load due to b is private and private access within the class..
   }
}
class Test3 extends Test2
{
  function demo3()
  {
    echo $this->a + $this->c;
  }
}
$obj= new Test3();
$obj->demo();
echo "<br>";
$obj->demo1();
echo "<br>";
$obj->demo2();
echo "<br>";
$obj->demo3();
?>