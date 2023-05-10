<?php

namespace GQ\Kata\Tests;

use GQ\Kata\MarsRover;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

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

    #[Test]
    public function should_turn_right(): void
    {
        $marsRover = new MarsRover();
        $marsRover->execute('R');

        $this->assertEquals("0:0:E", $marsRover->position());
    }

    // TODO: should stay at non initial position when executing no command
    // TODO: should move rover forward one square in the east direction
    // TODO: should move rover forward one square in the west direction
    // TODO: should move rover forward one square in the south direction
}
