<?php

namespace App\ValueObjects;

final readonly class TariffDuration
{
    private \DateTimeImmutable $value;

    public function __construct(
        mixed $value,
    )
    {
        if ($value instanceof \DateTimeImmutable) {
            $this->value = $value;
        } else {
            $this->value = new \DateTimeImmutable($value);
        }
    }

    public function getValue(): \DateTimeImmutable
    {
        return $this->value;
    }
}