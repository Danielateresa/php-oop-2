<?php

require_once __DIR__ . './Category.php';


//classe padre prodotti
class Product
{
    public function __construct(public String $name, public int $price, public Category $category)
    {
        $this->name = $name;
        $this->price = $price;
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


//-----------classi figlie di prodotti, ereditano nome, prezzo, categoria
/* class Food extends Product
{
    public function __construct(public String $expiryDate, public int $weight)
    {
        $this->expiryDate = $expiryDate;
        $this->weight = $weight;
    }
}
class Game extends Product
{
}
class Kennel extends Product
{
} */


//db prodotti
$dogTreat = new Product('Good Treat', 60, new Category('Dog'));
$CatTreat = new Product('Meow protein Treat', 80, new Category('Cat'));

/* var_dump($dogTreat->name);
var_dump($dogTreat->price);
var_dump($dogTreat->category); */
var_dump($CatTreat->getName());
var_dump($dogTreat->getCategory());