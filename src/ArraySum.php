<?php
/**
 * User: Elminson De Oleo Baez
 * Date: 8/23/2018
 * Time: 12:29 PM
 */

namespace Recursive;

class ArraySum
{

    /**
     * @param $array
     * @param $size
     * @param int $index
     * @param int $sum
     * @return int
     */
    public function sum($array, $size, $index = 0, $sum = 0)
    {
        if ($index == $size + 1) {
            return $sum;
        }
        $sum += $array[$index];
        return $this->sum($array, $size, $index + 1, $sum);
    }
}