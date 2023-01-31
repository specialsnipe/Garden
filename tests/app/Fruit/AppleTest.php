<?php

declare(strict_types=1);

use App\Fruit\Apple;
use PHPUnit\Framework\TestCase;

final class AppleTest extends TestCase
{
    private $apple;
    public function setUp(): void
    {
        $this->apple = new Apple(130);
    }

    public function testGetName(): void
    {
        $this->assertEquals(130, $this->apple->getWeight());
    }
    public function testGetWeight(): void
    {
        $this->assertEquals("apple", $this->apple->getName());
    }
}
