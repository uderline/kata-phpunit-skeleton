<?php

namespace GQ\Kata;

class MarsRover
{
    private bool $moved = false;
    private string $direction = 'N';

    public function position(): string
    {
        return ($this->moved ? '0:1' : '0:0') . ':' . $this->direction;
    }

    public function execute(string $commands): void
    {
        if ($commands === 'M') {
            $this->moved = true;
        }

        if ($commands === 'R') {
            $this->direction = 'E';
        }
    }
}
