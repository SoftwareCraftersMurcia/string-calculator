<?php
declare(strict_types=1);

namespace Kata;

use Exception;

final class StringCalculator
{
    /**
     * @throws Exception
     */
    public function add(string $numbers): int
    {
        $separator = ',';
        if (str_starts_with($numbers, '//')) {
            $separator = $numbers[2];
        }

        $normalizedNumbers = str_replace(["\n", '//'], $separator, $numbers); // ;;;1;2
        $explodedNumbers = explode($separator, $normalizedNumbers);
        $negativeNumbers = array_filter($explodedNumbers, fn(string $number) => (int) $number < 0);

        if (!empty($negativeNumbers)) {
            throw NumbersNotAllowedException::withNegativeNumbers($negativeNumbers);
        }

        return array_sum($explodedNumbers);
    }
}
