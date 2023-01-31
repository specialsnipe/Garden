<?php

namespace App\Factories\FactoryTree;

use App\Tree\TreeInterface;

interface TreeFactoryInterface
{
    public static function make(): TreeInterface;
}