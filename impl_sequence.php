<?php
/**
 * User: Elminson De Oleo Baez
 * Date: 8/23/2018
 * Time: 12:18 AM
 */

namespace Recursive;

require __DIR__ . '/vendor/autoload.php';

$new = new Sequence();
$array=[1,2,3,4];
echo $new->check_sequence($array,3,count($array));
