<?php

declare(strict_types=1);

namespace Kata;

use RuntimeException;

final class NumbersNotAllowedException extends RuntimeException
{
    public static function withNegativeNumbers(array $negativeNumbers): self
    {
        return new self(
            sprintf(
                'Negatives not allowed: %s',
                implode(' ', $negativeNumbers)
            )
        );
    }
}
