<?php

declare(strict_types=1);

use App\Fruit\Pear;
use PHPUnit\Framework\TestCase;

final class PearTest extends TestCase
{
    private $pear;
    public function setUp(): void
    {
        $this->pear = new Pear(130);
    }

    public function testGetName(): void
    {
        $this->assertEquals(130, $this->pear->getWeight());
    }
    public function testGetWeight(): void
    {
        $this->assertEquals("pear", $this->pear->getName());
    }
}