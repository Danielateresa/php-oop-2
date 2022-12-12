<?php

require_once __DIR__ . './Category.php';
require_once __DIR__ . './Food.php';
require_once __DIR__ . './Game.php';


//classe padre prodotti
class Product
{
    public function __construct(public String $name, public int $price, public Category $category, public Food $specific, public Game $detail)
    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->specific = $specific;
        $this->detail = $detail;
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
$products =[
$dogTreat = new Product('Good Treat', 60, new Category('Dog'), new Food('01/2024', 20)),
$catTreat = new Product('Meow protein Treat', 80, new Category('Cat'), new Food('05/2026', 15)),
$fresbee = new Product('Fresbee', 6, new Category('Dog'), new Game('yellow')),
];

/* var_dump($dogTreat->name);
var_dump($dogTreat->price);
var_dump($dogTreat->category); */
/* var_dump($catTreat->getName());
var_dump($dogTreat->getCategory()); */