<?php

require_once __DIR__ . './Category.php';


//classe padre prodotti
class Product
{
    public function __construct(public String $name, public int $price, public Category $category, public Food $specific)
    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->specific = $specific;
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


//-----------classi figlie di prodotti, ereditano nome, prezzo, categoria
class Food extends Product
{
    public function __construct(public String $expiryDate, public int $weight)
    {
        //proprietà specifiche
        $this->expiryDate = $expiryDate;
        $this->weight = $weight;
    }
}
/* class Game extends Product
{
}
class Kennel extends Product
{
} */


//db prodotti
$products =[
$dogTreat = new Product('Good Treat', 60, new Category('Dog'), new Food('01/2024', 20)),
$catTreat = new Product('Meow protein Treat', 80, new Category('Cat'), new Food('05/2026', 15)),
];

/* var_dump($dogTreat->name);
var_dump($dogTreat->price);
var_dump($dogTreat->category); */
/* var_dump($catTreat->getName());
var_dump($dogTreat->getCategory()); */