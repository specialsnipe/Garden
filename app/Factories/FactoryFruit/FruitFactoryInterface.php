<?php

use App\fruit\FruitInterface;

interface FruitFactoryInterface
{
    public static function make(): FruitInterface;
}