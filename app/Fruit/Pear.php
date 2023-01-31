<?php

namespace App\Fruit;

class Pear extends Fruit
{
    public function __construct(protected int $weight, protected string $name ='pear')
    {

    }
}