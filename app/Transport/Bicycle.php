<?php

namespace App\Transport;

class Bicycle implements Transport
{
    protected $speed;

    public function __construct(float $speed)
    {
        $this->speed = $speed;
    }

    public function move(): void
    {
        echo "Велосипед движется со скоростью {$this->speed} км/ч.\n";
    }

    public function honk(): void
    {
        echo "Звук сигнала велосипеда: Ding Ding!\n";
    }

    public function brake(): void
    {
        echo "Велосипед тормозит.\n";
    }

    public function getSpeed(): float
    {
        return $this->speed;
    }
}
