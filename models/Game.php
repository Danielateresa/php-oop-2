<?php

class Game extends Product
{
    public function __construct(public String $detail)
    {
        //proprietà specifiche
        $this->detail = $detail;
    }
}