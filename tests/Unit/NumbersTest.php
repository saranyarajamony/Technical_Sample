<?php

declare(strict_types=1);

namespace Tests\Unit;

use App\Numbers;

use PHPUnit\Framework\TestCase;

class NumbersTest extends TestCase
{
    /** @test 
     * 
     * @dataProvider provideNumbers
     */
    public function digit_sum($number, $sum)
    {
        $num = new Numbers();
        $digitSum = $num->digitSum($number);
        $this->assertSame($digitSum, $sum);
    }


    public function provideNumbers() :array
    {
        return [
            [
                1234,
                1
            ],
            [
                8907,
                1
            ],
            [
                4567,
                9
            ],
            [
                8999,
                2
            ],
            [
                456789,
                2
            ],
            [
                123456789,
                7
            ],
            [
                98765,
                3
            ]
        ];
    }
}
