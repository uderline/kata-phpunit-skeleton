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

        foreach (str_split($commands) as $command) {
            if ($command === 'R') {
                $this->direction = match ($this->direction) {
                    'N' => 'E',
                    'E' => 'S',
                    'S' => 'W',
                    'W' => 'N',
                };
            }
        }
    }
}
