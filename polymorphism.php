<?php
class Shape
{
 function draw()
 {

 }
}
class Circle extends Shape
{
    function draw()
  {
    echo "circle has been drawn"."<br>";
  }
}
class Triangle extends Shape
{
  function draw()
  {
     echo "triangle has been drawn"."<br>";
  }
}
class Ellipse extends Shape
{
   function draw()
  {
    echo "ellipse has been drawn"."<br>";
  }
}
$obj=array();
$obj[0]= new Circle();
$obj[1]= new Triangle();
$obj[2]= new Ellipse();
for ($i=0; $i <3 ; $i++){ 
	$obj[$i]->draw();
}
?>