<?php

abstract class Dier
{
    abstract protected function praat();

    public function eet()
    {
        echo "lekker!" . PHP_EOL;
    }

    public function slaap()
    {
        echo "ZZZZzzzzz...." . PHP_EOL;
    }
}
