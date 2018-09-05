<?php
/**
 * User: Elminson De Oleo Baez
 * Date: 9/5/2018
 * Time: 2:10 PM
 */


require __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Recursive\ReduceByOne;

class ReduceByOneTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function testTrueReduce()
    {
        $reduce = new ReduceByOne();
        $this->assertEquals(4, $reduce->reduce(7));
        $this->assertEquals(5, $reduce->reduce(15));
        $this->assertEquals(9, $reduce->reduce(200));
    }

    /**
     * @throws Exception
     */
    public function testExceptionReduce()
    {
        $this->expectException(Exception::class, "A non-numeric value encountered");
        $reduce = new ReduceByOne();
        $this->assertEquals(9, $reduce->reduce("a"));

    }
}