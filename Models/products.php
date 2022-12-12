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

class Food
{
    public function __construct(public String $name, public int $price, public array $categories)
    {
        $this->name = $name;
        $this->price = $price;
        $this->categories = $categories;
    }
}
class Game
{
    public function __construct(public String $name, public int $price, public array $categories)
    {
        $this->name = $name;
        $this->price = $price;
        $this->categories = $categories;
    }
}
class Kennel
{
    public function __construct(public String $name, public int $price, public array $categories)
    {
        $this->name = $name;
        $this->price = $price;
        $this->categories = $categories;
    }
}

class Category
{
    public function __construct(public String $name)
    {
        $this->name = $name;
    }
}

//categorie prodotti
$categories = [
    new Category('Cani'),
    new Category('Gatti')
];