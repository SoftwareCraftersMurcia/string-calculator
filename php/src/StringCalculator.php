<?php declare(strict_types=1);

namespace Kata;

final class StringCalculator
{
    public function add(string $numbers): int
    {
        $explodedNumbers = explode(',', $numbers);

        return array_sum($explodedNumbers);
    }
}
