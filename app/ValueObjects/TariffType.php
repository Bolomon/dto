<?php

namespace App\ValueObjects;

use App\Enums\TariffType as TypeEnum;

final readonly class TariffType
{
    public function __construct(
        private string $value
    )
    {
        if (!in_array($value, TypeEnum::values())){
            throw new \InvalidArgumentException('Invalid tariff type');
        }
    }

    public function getValue(): string
    {
        return $this->value;
    }
}