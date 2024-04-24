<?php

namespace App\ValueObjects;

final readonly class TariffName
{
    public function __construct(
        private string $value,
    )
    {
    }

    public function getValue(): string
    {
        return $this->value;
    }
}