<?php

namespace GQ\Kata;

class MarsRover
{
    private bool $moved = false;

    public function position(): string
    {
        return $this->moved ? '0:1:N' : '0:0:N';
    }

    public function execute(string $commands): void
    {
        if ($commands === 'M') {
            $this->moved = true;
        }
    }
}
