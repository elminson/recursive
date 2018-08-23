<?php
/**
 * User: Elminson De Oleo Baez
 * Date: 8/22/2018
 * Time: 10:36 PM
 */

class Sequence
{
    /**
     * @param $array
     * @param $x
     * @param $size
     * @param int $count
     * @param int $index
     * @return bool
     */
    public function check_sequence($array, $x, $size, $count = 0, $index = 0)
    {
        if ($count == $x) {
            return true;
        }
        if ($size == 0) {
            return false;
        }
        if ($array[$index] == $array[$index + 1] - 1) {
            $count++;
            unset($array[$index]);
        }
        return $this->check_sequence($array, $x, $size - 1, $count, $index + 1);
    }
}