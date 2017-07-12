<?php
require 'Circle.php';
require 'Rectangle.php';
require 'ChocolateFactory.php';

$snicky = WillyWonkaChocolateFactory::create('Snickers', array (
  2 => 'sugar',
  3 => 'chocolate',
  4 => 'caramel',
  121 => 'milk',
));

echo $snicky->getReceipt() . '<br>';; // outputs "Bugatti Veyron"

$circ = new Circle(3);
$rect = new Rectangle(3,4);

echo 'circle: ' . $circ -> calcArea() . '<br>';
echo 'rectangle: ' . $rect -> calcArea() . '<br>';
?>
