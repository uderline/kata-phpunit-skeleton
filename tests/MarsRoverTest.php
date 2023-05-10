<?php

namespace GQ\Kata\Tests;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use GQ\Kata\MarsRover;

final class MarsRoverTest extends TestCase
{
    #[Test]
    public function should_initially_be_at_position_0_0_N(): void
    {
        $marsRover = new MarsRover();
        $this->assertEquals("0:0:N", $marsRover->position());
    }
}