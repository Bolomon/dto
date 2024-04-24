<?php

namespace App\DTO;

use App\Traits\ToArray;
use App\ValueObjects\TariffCost;
use App\ValueObjects\TariffDuration;
use App\ValueObjects\TariffName;
use App\ValueObjects\TariffSpeed;
use App\ValueObjects\TariffType;

class TariffDTO implements DTOInterface
{
    use ToArray;

    public function __construct(
        private TariffName $name,
        private TariffCost $cost,
        private TariffDuration $duration,
        private TariffSpeed $speed,
        private TariffType $type,
    )
    {
    }

    public static function create(
        TariffName $name,
        TariffCost $cost,
        TariffDuration $duration,
        TariffSpeed $speed,
        TariffType $type,
    ): TariffDTO
    {
        return new self($name, $cost, $duration, $speed, $type);
    }

    public static function transform(array $args): TariffDTO
    {
        $dto = self::create(
            name: new TariffName($args['name']),
            cost: new TariffCost($args['cost']),
            duration: new TariffDuration($args['duration']),
            speed: new TariffSpeed($args['speed']),
            type: new TariffType($args['type']),
        );

        return $dto;
    }

    public function getName(): string
    {
        return $this->name->getValue();
    }

    public function getCost(): float
    {
        return $this->cost->getValue();
    }

    public function getDuration(): \DateTimeImmutable
    {
        return $this->duration->getValue();
    }

    public function getSpeed(): int
    {
        return $this->speed->getValue();
    }

    public function getType(): string
    {
        return $this->type->getValue();
    }
}