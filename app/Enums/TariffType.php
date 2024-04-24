<?php

namespace App\Enums;

enum TariffType: string
{
    case ACTUAL = 'actual';
    case ARCHIVE = 'archive';
    case SYSTEM = 'system';

    public function label(): string
    {
        $options = self::options();
        return $options[$this->value] ?? 'N/A';
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function options(): array
    {
        return [
            TariffType::ACTUAL->value => 'актуальный',
            TariffType::ARCHIVE->value => 'архивный',
            TariffType::SYSTEM->value => 'системный',
        ];
    }
}
