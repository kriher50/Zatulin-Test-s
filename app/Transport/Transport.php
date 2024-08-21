<?php

namespace App\Transport;

interface Transport
{
    public function move(): void;
    public function honk(): void;
    public function brake(): void;
    public function getSpeed(): float;
}
