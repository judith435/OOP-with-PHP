<?php
require 'Circle.php';
require 'Rectangle.php';
require 'ChocolateFactory.php';



$circ = new Circle(3);
$rect = new Rectangle(3,4);

echo 'circle: ' . $circ -> calcArea() . '<br>';
echo 'rectangle: ' . $rect -> calcArea() . '<br>';
?>
