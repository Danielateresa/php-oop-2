<?php

//classe padre prodotti
class Product
{
    public function __construct(public String $name, public int $price, public array $categories)
    {
        $this->name = $name;
        $this->price = $price;
        $this->categories = $categories;
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

$categories = [
    new Category('Cani'),
    new Category('Gatti')
];



//-----------classi figlie di prodotti, ereditano nome, prezzo, categoria
class Food extends Product
{
}
class Game extends Product
{
}
class Kennel extends Product
{
}