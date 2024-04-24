<?php
require __DIR__.'/../vendor/autoload.php';

use App\DTO\TariffDTO;
use App\ValueObjects\TariffCost;
use App\ValueObjects\TariffDuration;
use App\ValueObjects\TariffName;
use App\ValueObjects\TariffSpeed;
use App\ValueObjects\TariffType;


$name = new TariffName("Тариф 1");
$cost = new TariffCost(100);
$duration = new TariffDuration("24.04.2024");
$speed = new TariffSpeed(100);
$type = new TariffType('actual');

$tariff = new TariffDTO(
    $name,
    $cost,
    $duration,
    $speed,
    $type,
);

$tariff2 = TariffDTO::transform(
    [
        'name' => 'Тариф 2',
        'cost' => 100,
        'duration' => '30 days',
        'speed' => 100,
        'type' => 'actual',
    ]
);

