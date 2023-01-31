<?php

namespace App\factories\factoryTree;

use App\tree\PearTree;
use App\tree\TreeInterface;

class PearTreeFactory implements TreeFactoryInterface
{

    public static function make(): TreeInterface
    {
        return new PearTree();
    }
}