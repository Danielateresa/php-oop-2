<?php

require_once __DIR__ . './Category.php';


//classe padre prodotti
class Product
{
    public function __construct(public String $name, public int $price, public String $foto, public Category $category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->foto = $foto;
        $this->category = $category;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCategory()
    {
        return $this->category;
    }
}

/*
class Kennel extends Product
{
} */


//db prodotti


/* var_dump($dogTreat->name);
var_dump($dogTreat->price);
var_dump($dogTreat->category); */
/* var_dump($catTreat->getName());
var_dump($dogTreat->getCategory()); */