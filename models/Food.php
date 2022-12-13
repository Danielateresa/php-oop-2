<?php

require_once __DIR__ . '/../trait/Available.php';
//-----------classi figlie di prodotti, ereditano nome, prezzo, categoria
class Food extends Product
{
    use available;

    public function __construct($name, $price, $category, $foto, public String $expiryDate, public int $weight)
    {
        parent::__construct($name, $price, $category, $foto);
        //proprietà specifiche
        $this->expiryDate = $expiryDate;
        $this->weight = $weight;
    }
}