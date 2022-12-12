<?php

//classe categoria prodotti
class Category
{
    public function __construct(public String $type)
    {
        $this->type = $type;
    }
}