<?php

namespace Superciety\ElrondSdk\Domain;

final class Token
{
    public function __construct(
        public string $identifier,
        public string $name,
        public int $decimals,
    ) {
    }

    public static function egld(): static
    {
        return new static(identifier: 'EGLD', name: 'eGold', decimals: 18);
    }
}