<?php

$array = range(0, 10);
foreach ($array as &$v) {
    $v = rand();
}
var_dump($array);
echo max($array);