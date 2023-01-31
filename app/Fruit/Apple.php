<?php

namespace App\Fruit;

class Apple extends Fruit
{
    public function __construct(protected int $weight, protected string $name ='apple')
    {

    }
}