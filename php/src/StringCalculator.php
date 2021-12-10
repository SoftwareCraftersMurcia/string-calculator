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
        $separator = $this->extractSeparator($numbers);

        $normalizedNumbers = str_replace(["\n", '//'], $separator, $numbers);
        $explodedNumbers = explode($separator, $normalizedNumbers);

        $this->validateOnlyPositiveNumbers($explodedNumbers);

        $numbersToSum = $this->validNumbersToSum($explodedNumbers);

        return array_sum($numbersToSum);
    }

    private function validateOnlyPositiveNumbers(array $explodedNumbers): void
    {
        $negativeNumbers = array_filter(
            array_filter($explodedNumbers),
            fn(string $number) => (int)$number < 0
        );

        if (!empty($negativeNumbers)) {
            throw NumbersNotAllowedException::withNegativeNumbers($negativeNumbers);
        }
    }

    private function extractSeparator(string $numbers): string
    {
        if (0 === strpos($numbers, '//')) {
            return $numbers[2];
        }

        return ',';
    }

    private function validNumbersToSum(array $explodedNumbers): array
    {
        return array_filter($explodedNumbers, fn(int $i) => $i < 1000);
    }
}
