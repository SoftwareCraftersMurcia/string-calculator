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
    public function add_single_number(): void
    {
        $result = $this->stringCalculator->add('4');

        self::assertSame(4, $result);
    }

    /** @test */
    public function add_multiple_numbers_split_by_commas(): void
    {
        $result = $this->stringCalculator->add('1,2');

        self::assertSame(3, $result);
    }

    /** @test */
    public function add_arbitrary_multiple_numbers_split_by_commas(): void
    {
        $result = $this->stringCalculator->add('1,2,3,4,5,6,7,8,9');

        self::assertSame(45, $result);
    }

    /** @test */
    public function add_multiple_numbers_split_by_newline_separator(): void
    {
        $result = $this->stringCalculator->add("1\n2,3");

        self::assertSame(6, $result);
    }

    /** @test */
    public function add_negative_throws_exception(): void
    {
        $this->expectExceptionMessage("Negatives not allowed: -2 -3");
        $this->stringCalculator->add('1,-2,-3');
    }
}
