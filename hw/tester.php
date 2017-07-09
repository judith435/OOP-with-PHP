<?php

interface IElectronicPart {
    public function getSpecs();
}

class ElectronicPart {
    private $manufacturer;
    private $price;
    private $model;

    public function priceAfterTax() {
        return $price*1.16;
    }
}

class Screen extends ElectronicPart implements IElectronicPart {
    private $size;
    private $panel;

    public function __construct($manufacturer, $price, $model, $panel, $size) {
        $this->manufacturer = $manufacturer;
        $this->price = $price;
        $this->model = $model;
        $this->panel = $panel;
        $this->size = $size;
    }

    public function getSpecs() {
        return 
            'Screen manufacturer: ' . $this->manufacturer . 
            ', model: '. $this->model . 
            ', Price: ' . $this->priceAfterTax() .
            ', Size: ' . $this->size;
    }
}

class Mouse extends ElectronicPart implements IElectronicPart{
    private $isWired;

    public function __construct($manufacturer, $price, $model, $isWired) {
        $this->manufacturer = $manufacturer;
        $this->price = $price;
        $this->model = $model;
        $this->isWired = $isWired;
    }

    public function getSpecs() {
        return 
            'Mouse manufacturer: ' . $this->manufacturer . 
            ', model: '. $this->model . 
            ', Price: ' . $this->priceAfterTax() .
            ', Is wired: ' . $this->isWired;
    }
}

class Keyboard extends ElectronicPart implements IElectronicPart{
    private $isWired;

    public function __construct($manufacturer, $price, $serial, $isWired) {
        $this->manufacturer = $manufacturer;
        $this->price = $price;
        $this->model = $model;
        $this->isWired = $isWired;
    }

    public function getSpecs() {
        return 
            'Keyboard manufacturer: ' . $this->manufacturer . 
            ', model: '. $this->model . 
            ', Price: ' . $this->priceAfterTax() .
            ', Is wired: ' . $this->isWired;
    }
}

class Computer extends ElectronicPart implements IElectronicPart{
    private $motherboard;
    private $processor;
    private $hardDrive;
    private $ram;
    private $graphicCard;

    public function __construct(
        $manufacturer, $price, $model, 
        $motherboard, $processor, $hardDrive, $ram, $graphicCard) {
        $this->manufacturer = $manufacturer;
        $this->price = $price;
        $this->model = $model;
        $this->motherboard = $motherboard;
        $this->processor = $processor;
        $this->hardDrive = $hardDrive;
        $this->ram = $ram;
        $this->graphicCard = $graphicCard;
    }
    public function getSpecs() {
        return 
            'Computer manufacturer: ' . $this->manufacturer . 
            ', model: '. $this->model . 
            ', Price: ' . $this->priceAfterTax();
    }
}

class purchase {
    private $screen;
    private $mouse;
    private $keyboard;
    private $computer;

    public function __construct($screen, $mouse, $keyboard, $computer) {
        $this->screen = $screen;
        $this->mouse = $mouse;
        $this->keyboard = $keyboard;
        $this->computer = $computer;   
    }

    public function getFullPurchaseDetails() {
        return $this->screen->getSpecs().'<br>'.
                $this->mouse->getSpecs().'<br>'.
                $this->keyboard->getSpecs().'<br>'.
                $this->computer->getSpecs().'<br><br>';
    }
}

$screen1 = new Screen('Samsung', 723, 'S24F350FH', 'PLS', 24);
$screen2 = new Screen('Samsung', 620, 'S22F350FH', 'TN', 21.5);
$screen3 = new Screen('Philips', 1517, '273V5LHAB', 'TFT', 27);
$screen4 = new Screen('Samsung', 2074, 'C27F591FD', 'VA', 27);

$mouse1 = new Mouse('Microsoft', 129, 'Mobile Mouse 1850', false);
$mouse2 = new Mouse('LogiTech', 799, 'MX Master', false);
$mouse3 = new Mouse('LogiTech', 128, 'M185', true);
$mouse4 = new Mouse('HP', 99, 'X3000 H2C22AA', false);

$keyboard1 = new Keyboard('Microsoft', 325, 'Natural Ergonomic 4000', true);
$keyboard2 = new Keyboard('Logitech', 285, 'G105', true);
$keyboard3 = new Keyboard('RAPOO', 189, 'E6100', false);
$keyboard4 = new Keyboard('Corsair', 799, 'K95', true);

$computer1 = new Computer(
    'GIGABYTE', 
    3059, 
    '',
    'GA-Z170-HD3', 
    'INTEL I7-6700', 
    'WD1TB', 
    '8GB DDR4 Hyper-X', 
    'Intel® HD Graphics 530'
);
$computer2 = new Computer(
    'AMD', 
    2418, 
    '',
    'ASUS A88XM-A/USB3.1', 
    'AMD A-Series Quad Core A10-7870K 3.9GHz', 
    'SanDisk SSD Plus 240GB', 
    'Kingston 8GB DDR3 1600MHz', 
    'AMD Radeon R7 Graphics'
);
$computer3 = new Computer(
    'Intel', 
    1580, 
    '',
    '', 
    'Intel Core i3-7100 3.9Ghz', 
    '500GB 7200RPM', 
    '4GB DDR4 2100Mhz',
    'Intel Skylake GT2 HD Graphics 630'
);

$pur1 = new purchase($screen1, $mouse1, $keyboard1, $computer1);
$pur2 = new purchase($screen4, $mouse3, $keyboard1, $computer3);
$pur3 = new purchase($screen3, $mouse2, $keyboard4, $computer1);
$pur4 = new purchase($screen2, $mouse1, $keyboard2, $computer2);

echo $pur1->getFullPurchaseDetails();
echo $pur2->getFullPurchaseDetails();
echo $pur3->getFullPurchaseDetails();
echo $pur4->getFullPurchaseDetails();
?>