<?php

namespace App\Transport;

class Car implements Transport
{
    protected $speed;

    public function __construct(float $speed)
    {
        $this->speed = $speed;
    }

    public function move(): void
    {
        echo "Машина движется со скоростью {$this->speed} км/ч.\n";
    }

    public function honk(): void
    {
        echo "Звук сигнала машины: Beep Beep!\n";
    }

    public function brake(): void
    {
        echo "Машина тормозит.\n";
    }

    public function getSpeed(): float
    {
        return $this->speed;
    }
}
