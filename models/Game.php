<?php

class Game extends Product
{
    public function __construct($name, $price, $category, public String $color, public String $material)
    {
        parent::__construct($name, $price, $category);
        //proprietà specifiche
        $this->color = $color;
        $this->material = $material;
    }
}