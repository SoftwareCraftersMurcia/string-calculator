<?php declare(strict_types=1);

namespace Kata;

final class StringCalculator
{
    public function add(string $numbers): int
    {
        $normalizedNumbers = str_replace("\n", ',', $numbers);
        $explodedNumbers = explode(',', $normalizedNumbers);

        return array_sum($explodedNumbers);
    }
}
