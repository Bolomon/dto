<?php

namespace App\DTO;

interface DTOInterface
{
    public function toArray(): array;
    public static function transform(array $args): self;
}