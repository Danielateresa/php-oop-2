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

    public function getName()
    {
        return $this->name;
    }
}


//categorie prodotti
/* class Category
{
    public function __construct(public String $type)
    {
        $this->type = $type;
    }
} */

/* $Dogs = new Category ('Dogs');
$Cats = new Category ('Cats');
 */


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
$dogTreat = new Product('Good Treat', 60, 'Dog');
/* var_dump($dogTreat->name);
var_dump($dogTreat->price);
var_dump($dogTreat->category); */
var_dump($dogTreat->getName());