<?php

declare(strict_types=1);

namespace Tests\Unit;

use App\Words;

use PHPUnit\Framework\TestCase;

class WordsTest extends TestCase
{
    /** @test 
     * 
     * @dataProvider provideWords
     */
    public function is_heterogram($wordtocheck, $isValid)
    {
        $word = new Words();
        $assertValue = $word->isHeterogram($wordtocheck);
        $this->assertSame((boolean)$assertValue, $isValid);
    }


    public function provideWords(): array
    {
        return [
            [
                'documentarily',
                true
            ],
            [
                'aftershock',
                true
            ],
            [
                'countryside',
                true
            ],
            [
                'six-year-old',
                true
            ],
            [
                'Double-down',
                false
            ],
            [
                'Euclidean',
                false
            ],
            [
                'epidemic',
                false
            ]
        ];
    }
}
