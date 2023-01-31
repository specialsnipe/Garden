<?php

namespace App\Factories\FactoryTree;

use App\tree\AppleTree;
use App\tree\TreeInterface;

class AppleTreeFactory implements TreeFactoryInterface
{

    public static function make(): TreeInterface
    {
        return new AppleTree();
    }
}