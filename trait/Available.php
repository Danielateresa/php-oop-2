<?php

//mostra un semplice tag per segnalare la spedizione veloce sui food
trait available
{
    public function availableMess()
    {
        echo 'fast shipment';
    }
}