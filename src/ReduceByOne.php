<?php
/**
 * User: Elminson De Oleo Baez
 * Date: 9/5/2018
 * Time: 2:02 PM
 */

namespace Recursive;

require __DIR__ . '/../vendor/autoload.php';

/* Reduce a number to 1 by performing given operations
* if even Operation 1 divede by 2
* if odd operation (n+1) or (n-1)
* minimun number steps to N =1
 */

/**
 * @param $n
 * @return int
 */
class ReduceByOne
{
    /**
     * @param $n
     * @return int|mixed
     * @throws \Exception
     */
    function reduce($n)
    {
        try {
            if ($n == 1) {
                return 0;
            }
            if ($n % 2 == 0) {
                return 1 + $this->reduce($n / 2);
            } else {
                return 1 + min($this->reduce($n - 1), $this->reduce($n + 1));
            }
        } catch (\Exception $e){
            throw new \Exception("A non-numeric value encountered");
        }

    }
}
