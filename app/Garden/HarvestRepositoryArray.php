<?php

namespace App\garden;

class HarvestRepositoryArray
{
    public static function getHarvest(array $trees)
    {
        return array_reduce($trees, function($acc, $tree){
            $fruits = $tree->getHarvest();

            $acc[$tree->getString()]['count'] += $fruits['count'];
            $acc[$tree->getString()]['weight'] += $fruits['weight'];
            return $acc;
        }, ['apple'=>['count' => 0, 'weight' => 0], 'pear'=>['count' => 0, 'weight' => 0]]);
    }
}