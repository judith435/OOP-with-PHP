<?php
class Chocolate
{
    private $chocolateName;
    private $receipt;

    public function __construct($name, $receipt)
    {
        $this->chocolateName = $name;
        $this->receipt = $receipt;
    }


    public function getReceipt()
    {
        return 'chocolate name ' . $this->chocolateName. ': receipt '. print_r($this->receipt);//$this->receipt;
    }
}

class WillyWonkaChocolateFactory
{
    public static function create($chocolateName, $receipt)
    {
        return new Chocolate($chocolateName, $receipt);
    }
}

// have the factory create the Chocolate object
// $snicky = WillyWonkaChocolateFactory::create('Snickers', array (
//   2 => 'sugar',
//   3 => 'chocolate',
//   4 => 'caramel',
//   121 => 'milk',
// ));

// print_r($snicky->getReceipt()); // outputs "Bugatti Veyron"
?>
