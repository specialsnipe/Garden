<?php

use App\fruit\Apple;
use App\fruit\FruitInterface;

class AppleFactory implements FruitFactoryInterface
{
    const WeightFruitFrom = 130;
    const WeightFruitTo = 170;

    public static function make(): FruitInterface
    {
        return new Apple(rand(self::WeightFruitFrom, self::WeightFruitTo));
    }
}