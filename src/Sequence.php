<?php
/**
 * User: Elminson De Oleo Baez
 * Date: 8/22/2018
 * Time: 10:36 PM
 */

namespace Recursive;

use PHPUnit\Runner\Exception;

require __DIR__ . '/../vendor/autoload.php';

class Sequence
{
    protected $debug;

    public function __construct($debug = false)
    {
        $this->debug = $debug;
    }

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
        $this->validateArray($array, $index);

        if ($count + 1 == $x) {
            return true;
        }

        if ($size < 0 || $index > $size || !isset($array[$index + 1])) {
            return false;
        }
        if ($array[$index] == $array[$index + 1] - 1) {
            $count++;
            unset($array[$index]);
        }
        if ($this->debug) {
            echo 'Array => ' . json_encode($array) . ', x => ' . $x . ', size => ' . ($size - 1) . ', cu t =>  ' . $count . ' ' . ($index + 1) . "\n";
        }
        return $this->check_sequence($array, $x, $size - 1, $count, $index + 1);
    }


    /**
     * @param $array
     * @param $x
     * @param $size
     * @param int $count
     * @param int $index
     * @return bool
     */
    public function check_sequence_v2($array, $x, $size, $count = 0, $index = 0)
    {
        $this->validateArray($array, $index);
        if ($count == $x) {
            return true;
        }
        if ($index > $size || !isset($array[$index + 1])) {
            return false;
        }
        if ($array[$index] == $array[$index + 1] - 1) {
            $count++;
        }

        return $this->check_sequence_v2($array, $x, $size, $count, $index + 1);

    }

    /**
     * @param $array
     * @param $index
     */
    private function validateArray($array, $index)
    {
        if (!isset($array[$index]) || !is_numeric($array[$index])) {
            throw new Exception("All elements must be integers!");
        }
        if (empty($array)) {
            throw new Exception("Array can't be empty!");
        }
        if (!is_array($array)) {
            throw new Exception("$ Array Must be an Array!");
        }
    }

}