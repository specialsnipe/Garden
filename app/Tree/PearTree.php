<?php

namespace App\tree;

use App\Fruit\Pear;

class PearTree extends Tree
{
    const WeightFruitFrom = 150;
    const WeightFruitTo = 180;

    public function getHarvest(): array
    {
        $countPears = 0;
        $weightOfFruits = 0;

        foreach ($this->fruits as $fruit) {
            $countPears++;
            $weightOfFruits += $fruit->getWeight();
        }
        $this->fruits = [];
        return ['count' => $countPears, 'weight'=> $weightOfFruits];
    }

    public function harvestRipening()
    {
        $countFruits = rand(40, 50);
        for ($i = 0; $i < $countFruits; $i++) {
            $this->fruits[] = new Pear(rand(self::WeightFruitFrom, self::WeightFruitTo));
        }
    }

    public function getString(): string
    {
        return 'pear';
    }
}