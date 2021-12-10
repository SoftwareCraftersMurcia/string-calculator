<?php declare(strict_types=1);

namespace KataTests;

use Kata\StringCalculator;
use PHPUnit\Framework\TestCase;

final class StringCalculatorTest extends TestCase
{
    private StringCalculator $stringCalculator;

    protected function setUp(): void
    {
        $this->stringCalculator = new StringCalculator();
    }

    /** @test */
    public function add_empty_string_is_zero(): void
    {
        $result = $this->stringCalculator->add('');

        self::assertSame(0, $result);
    }

    /** @test */
    public function add_single_number_equal_same_number(): void
    {
        $result = $this->stringCalculator->add('4');

        self::assertSame(4, $result);
    }
}
