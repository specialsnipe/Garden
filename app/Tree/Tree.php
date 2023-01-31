<?php

namespace App\Tree;

abstract class Tree implements TreeInterface
{
    private int $id;
    protected array $fruits =[];

    public function __construct()
    {
        $this->id = mt_rand();
    }

    public function getId(): int
    {
        return $this->id;
    }

}