<?php

//-----------classi figlie di prodotti, ereditano nome, prezzo, categoria
class Food extends Product
{
    public function __construct($name, $price, $category, public String $expiryDate, public int $weight)
    {
        parent::__construct($name, $price, $category);
        //proprietà specifiche
        $this->expiryDate = $expiryDate;
        $this->weight = $weight;
    }
}