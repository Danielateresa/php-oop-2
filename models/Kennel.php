<?php

class Kennel extends Product
{
    public function __construct($name, $price, $category, public String $size, public String $filling)
    {
        parent::__construct($name, $price, $category);
        //proprietà specifiche
        $this->size = $size;
        $this->filling = $filling;
    }
}