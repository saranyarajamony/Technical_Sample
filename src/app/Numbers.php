<?php

declare(strict_types=1);

namespace  App;


class Numbers
{

    public function digitSum(int $num): int
    {
        //if empty or not a string type argument, throw exception
        if (empty($num) || !is_int($num)) {
            throw new \InvalidArgumentException();
        }

        $sum = 0;

        // Loop to do sum while
        // sum is not less than
        // or equal to 9
        while ($num > 0 || $sum > 9) {
            if ($num == 0) {
                $num = $sum;
                $sum = 0;
            }
            $sum += $num % 10;
            $num = $num / 10;
            $num =intval(round($num));
        }
        return $sum;
    }
}
