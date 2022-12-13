<?php

require_once __DIR__ . '/../trait/Color.php';
class Game extends Product
{
    use Color;

    public function __construct($name, $price, $category, $foto, public String $material)
    {
        parent::__construct($name, $price, $category, $foto);
        //proprietà specifiche
        // $this->color = $color;
        $this->material = $material;
    }

    /* public function getColor()
    {
        return $this->color;
    } */
    public function getMaterial()
    {
        return $this->material;
    }
}