<?php

    require 'ElectronicPart .php';

    class Screen extends ElectronicPart {

        private $size;
        private $panel;

        function __construct($size, $panel) {
            $this->setSize($size);
            $this->setPanel($panel);
        }


        function setSize($size) {
             $this->size = $size;
        }

        function setPanel($panel) {
            $this->panel = $panel;
        }


        function getSize() {
            return $this->size;
        }

        function getPanel() {
            return  $this->panel;
        }

    }


?>