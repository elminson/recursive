<?php
/**
 * User: Elminson De Oleo Baez
 * Date: 8/22/2018
 * Time: 10:57 PM.
 */

namespace Recursive;

require __DIR__.'/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class ArraySumTest extends TestCase
{
    public function testArraySum()
    {
        $array_sum = new ArraySum();
        $array = [1, 2, 3];
        $this->assertEquals(6, $array_sum->sum($array, count($array) - 1));
    }
}
