<?php

trait color
{
    public $color = [];

    //inserisco la proprietà nell'array
    public function setColor(string $color)
    {
        array_push($this->color, $color);
    }
    //ritorno l'array come stringa
    public function getColor()
    {
        return implode(',', $this->color);
    }
}