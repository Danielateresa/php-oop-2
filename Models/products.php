<?php

//classe padre prodotti
class Product
{
    public function __construct(public String $name, public int $price, public String $category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }
}


//categorie prodotti
class Category
{
    public function __construct(public String $name)
    {
        $this->name = $name;
    }
}



//-----------classi figlie di prodotti, ereditano nome, prezzo, categoria
class Food extends Product
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
}


//db prodotti
$dogTreat = new Product('Good Treat', 60, new Category('Dog'));
var_dump($dogTreat->$dogTreat);