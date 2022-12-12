<?php

//classi figlie di prodotti, ereditano nome, prezzo, categoria
class Food extends Product
{
    public function __construct(public String $expiryDate, public int $weight)
    {
        //proprietà specifiche
        $this->expiryDate = $expiryDate;
        $this->weight = $weight;
    }
}