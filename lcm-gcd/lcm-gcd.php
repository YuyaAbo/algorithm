<?php

/**
 * 最大公約数
 * @param $a
 * @param $b
 * @return int
 */
function gcd($a, $b)
{
    if ($b === 0) return (int)$a;
    return gcd($b, $a % $b);
}

/**
 * 最小公倍数
 * @param $a
 * @param $b
 * @return int
 */
function lcm($a, $b)
{
    return (int)($a * $b / gcd($a, $b));
}