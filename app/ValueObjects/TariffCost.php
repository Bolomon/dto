<?php

namespace App\ValueObjects;

final readonly class TariffCost
{
    public function __construct(
        private int $value,
    )
    {
        if ($value < 0) {
            throw new \InvalidArgumentException('Speed value cannot be negative');
        }
    }

    public function getValue(): float
    {
        return $this->value;
    }
}