<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Transport\Car;
use App\Transport\Bicycle;

class TransportTime extends Command
{
    protected $signature = 'test:transport {distance}';
    protected $description = 'Рассчитать время для преодоления заданного расстояния';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $distance = (float) $this->argument('distance');

        // скорость и имя
        $transportModes = [
            'Mercedes-Benz E-Класс 220 d' => new Car(150),
            'BMW X6 30d' => new Car(140),
            'Москвич 6' => new Car(60),
            'Велосипед Ford' => new Bicycle(25),
        ];

        foreach ($transportModes as $name => $transport) {
            $speed = $transport->getSpeed();
            $time = $distance / $speed;
            $this->info("{$name} преодолеет {$distance} км за " . round($time, 2) . " часов.");
        }
    }
}
