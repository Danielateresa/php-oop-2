<?php

require_once __DIR__ . '/../trait/Color.php';
class Kennel extends Product
{
    use Color;
    public function __construct($name, $price, $category, $foto, public String $size, public String $filling)
    {
        parent::__construct($name, $price, $category, $foto);
        //proprietà specifiche
        $this->size = $size;
        $this->filling = $filling;
    }
    public function getSize()
    {
        return $this->size;
    }
    public function getFilling()
    {
        return $this->filling;
    }
}