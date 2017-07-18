<?php

/**
 * エラトステネスの篩
 * @param $n
 * @return array
 */
function eratosthenes($n)
{
    if ($n < 2) return [];
    $sqrt = floor(sqrt((float)$n));
    $list = array_fill(2, $n-1, true);
    for ($i=2; $i<=$sqrt; $i++) {
        if (isset($list[$i])) {
            for ($j=$i*2; $j<=$n; $j+=$i) {
                unset($list[$j]);
            }
        }
    }
    return array_keys($list);
}