<?php

namespace App\Tree;

use App\Fruit\Apple;

class AppleTree extends Tree
{
    const WeightFruitFrom = 130;
    const WeightFruitTo = 170;

    public function getHarvest(): array
    {
        $countPears = 0;
        $weightOfFruits = 0;

        foreach ($this->fruits as $fruit) {
            $countPears++;
            $weightOfFruits += $fruit->getWeight();
        }
        $this->fruits = [];
        return ['count' => $countPears, 'weight' =>$weightOfFruits];
    }

    public function harvestRipening()
    {
        if ($this->fruits == []) {
            $countFruits = rand(40, 50);
            for ($i = 0; $i < $countFruits; $i++) {
                $this->fruits[] = new Apple(rand(self::WeightFruitFrom, self::WeightFruitTo));
            }
        } else {
            print_r('Урожай еще не собран' . PHP_EOL);
        }

    }

    public function getString(): string
    {
        return 'apple';
    }
}