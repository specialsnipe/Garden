<?php

namespace App\Fruit;

abstract class Fruit implements FruitInterface
{
    protected string $name;
    protected int $weight;


    public function getName(): string
    {
        return $this->name;
    }

    public function getWeight(): int
    {
        return $this->weight;
    }
}