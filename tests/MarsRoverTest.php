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

    #[Test]
    public function should_not_change_position_when_executing_no_command(): void
    {
        $marsRover = new MarsRover();
        $marsRover->execute('');

        $this->assertEquals("0:0:N", $marsRover->position());
    }

    #[Test]
    public function should_move_rover_forward_one_square_in_the_north_direction(): void
    {
        $marsRover = new MarsRover();
        $marsRover->execute('M');

        $this->assertEquals("0:1:N", $marsRover->position());
    }

    // TODO: should stay at non initial position when executing no command
}
