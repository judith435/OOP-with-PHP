<?php
    require 'Screen .php';

    $buli = new ElectronicPart(1,2,3);
    echo 'manufacturer: ' . $buli -> getManufacturer() . '<br>';
    echo 'price: ' . $buli -> getPrice() . '<br>';
    echo 'model: ' . $buli -> getModel() . '<br>';

    $tuli = new Screen(9,8,7,6,5);
    echo 'manufacturer: ' . $tuli -> getManufacturer() . '<br>';
    echo 'price: ' . $tuli -> getPrice() . '<br>';
    echo 'model: ' . $tuli -> getModel() . '<br>';
    echo 'size: ' . $tuli -> getSize() . '<br>';
    echo 'panel: ' . $tuli -> getPanel() . '<br>';

?>
