<?php

namespace App\Tree;

interface TreeInterface
{
    public function getId(): int;
    public function getHarvest(): array;
    public function getString(): string;
    public function harvestRipening();
}