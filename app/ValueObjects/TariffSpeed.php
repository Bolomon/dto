<?php

namespace App\ValueObjects;

final readonly class TariffSpeed
{
    public function __construct(
        private int $value,
    )
    {
        if ($value < 0) {
            throw new \InvalidArgumentException('Speed value cannot be negative');
        }
    }

    public function getValue(): int
    {
        return $this->value;
    }
}