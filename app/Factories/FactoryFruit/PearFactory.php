<?php

use App\fruit\FruitInterface;
use App\fruit\Pear;

class PearFactory implements FruitFactoryInterface
{

    public static function make(): FruitInterface
    {
        return new Pear();
    }
}