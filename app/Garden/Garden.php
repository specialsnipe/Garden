<?php

namespace App\Garden;

use App\Factories\FactoryTree\AppleTreeFactory;
use App\Factories\FactoryTree\PearTreeFactory;

class Garden
{
    private array $trees = [];
    private array $crop = [];

    public function __construct(
        private HarvestRepositoryArray $harvestRepositoryArray
    )
    {
    }

    public function plantAppleTree(): void
    {
        $this->trees[] = AppleTreeFactory::make();
    }

    public function plantPearTree(): void
    {
        $this->trees[] = PearTreeFactory::make();
    }

    public function plantTrees(): void
    {
        if ($this->trees == []) {
            for ($i = 0; $i < 15; $i++) {
                $this->trees[] = AppleTreeFactory::make();
            }

            for ($i = 0; $i < 10; $i++) {
                $this->trees[] = PearTreeFactory::make();
            }
        } else {
            print_r('Деревья уже засажены' . PHP_EOL);
        }

    }

    public function harvestRipening()
    {
        if ($this->trees == []) {
            print_r('В саду нет ни одного дерева, урожая не будет,пока не посадите деревья' . PHP_EOL);
        } else {
            foreach ($this->trees as $tree) {
                $tree->harvestRipening();
            }
            print_r('Урожай созрел' . PHP_EOL);
        }

    }

    public function getHarvest()
    {
        if ($this->trees == []) {
            print_r('Деревьев нет,собирать нечего');
            return null;
        }
        if ($this->crop === []) {
            $this->crop = $this->harvestRepositoryArray::getHarvest($this->trees);
            print_r(
                'Собрано :' . PHP_EOL . $this->dampInfo()
            );
            return $this->crop;
        } else {
            print_r(
                'Уже было собрано :' . PHP_EOL . $this->dampInfo()
            );
            return $this->crop;
        }
    }

    public function dampInfo()
    {
        return $this->crop['apple']['count'] . 'яблок -  весом ' . $this->crop['apple']['weight'] . ' грамм' . PHP_EOL .
            $this->crop['pear']['count'] . 'груш - весом ' . $this->crop['pear']['weight'] . ' грамм.';
    }
}