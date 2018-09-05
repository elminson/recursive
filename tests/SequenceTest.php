<?php
/**
 * User: Elminson De Oleo Baez
 * Date: 8/22/2018
 * Time: 10:57 PM.
 */

namespace Recursive;

require __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Exception;
use PHPUnit\Framework\TestCase;

class SequenceTest extends TestCase
{
    public function testTrueSequence()
    {
        $sequence = new Sequence();
        $array = [1, 2, 3, 4, 5, 6, 7, 8];
        $this->assertTrue($sequence->check_sequence($array, 3, count($array) - 1));
    }

    public function testTrueDebbugSequence()
    {
        $sequence = new Sequence(true);
        $array = [1, 2, 3, 4, 5, 6, 7, 8];
        $this->assertTrue($sequence->check_sequence($array, 3, count($array) - 1));
    }

    public function testTrueTwoSequence()
    {
        $sequence = new Sequence();
        $array = [1, 2, 3, 4, 5, 6, 7, 8];
        $this->assertTrue($sequence->check_sequence($array, 1, count($array) - 1));
    }

    public function testFalseSequence()
    {
        $sequence = new Sequence();
        $array = [1, 3, 5, 7, 8];
        $this->assertFalse($sequence->check_sequence($array, 3, count($array) - 1));
    }

    public function testExceptionSequence()
    {
        $sequence = new Sequence();
        $array = [];
        $this->expectException(Exception::class, "Array can't be empty!");
        $sequence->check_sequence($array, 3, count($array) - 1);
    }

    public function testExceptionNullSequence()
    {
        $sequence = new Sequence();
        $array = [''];
        $this->expectException(Exception::class, "Array can't be empty!");
        $sequence->check_sequence($array, 3, count($array) - 1);
    }

    public function testExceptionNotNumericSequence()
    {
        $sequence = new Sequence();
        $array = ['a', 2, 3, 'a'];
        $this->expectException(Exception::class, 'All elements must be integers!');
        $sequence->check_sequence($array, 3, count($array) - 1);
    }

    //V2 no unset used
    public function testTrueSequencev2()
    {
        $sequence = new Sequence();
        $array = [1, 2, 3, 4, 5, 6, 7, 8];
        $this->assertTrue($sequence->check_sequence_v2($array, 3, count($array) - 1));
    }

    public function testTrueDebbugSequencev2()
    {
        $sequence = new Sequence(true);
        $array = [1, 2, 3, 4, 5, 6, 7, 8];
        $this->assertTrue($sequence->check_sequence_v2($array, 3, count($array) - 1));
    }

    public function testTrueTwoSequencev2()
    {
        $sequence = new Sequence();
        $array = [1, 2, 3, 4, 5, 6, 7, 8];
        $this->assertTrue($sequence->check_sequence_v2($array, 1, count($array) - 1));
    }

    public function testFalseSequencev2()
    {
        $sequence = new Sequence();
        $array = [1, 3, 5, 7, 8];
        $this->assertFalse($sequence->check_sequence_v2($array, 3, count($array) - 1));
    }

    public function testExceptionSequencev2()
    {
        $sequence = new Sequence();
        $array = [];
        $this->expectException(Exception::class, "Array can't be empty!");
        $sequence->check_sequence_v2($array, 3, count($array) - 1);
    }

    public function testExceptionNullSequencev2()
    {
        $sequence = new Sequence();
        $array = [""];
        $this->expectException(Exception::class, "Array can't be empty!");
        $sequence->check_sequence_v2($array, 3, count($array) - 1);
    }

    public function testExceptionNotNumericSequencev2()
    {
        $sequence = new Sequence();
        $array = ["a", 2, 3, "a"];
        $this->expectException(Exception::class, "All elements must be integers!");
        $sequence->check_sequence_v2($array, 3, count($array) - 1);
    }
}
