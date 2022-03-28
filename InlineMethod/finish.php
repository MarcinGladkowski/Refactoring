<?php

function sumEvenNumbers($numbers): float|int
{
    return array_sum(array_filter($numbers, fn($num) => $num % 2));
}
