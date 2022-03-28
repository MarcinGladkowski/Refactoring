<?php

function sumEvenNumbers($numbers): float|int
{
    return array_sum(filterSquared($numbers));
}

function filterSquared($numbers): array
{
    return array_filter($numbers, fn($num) => $num % 2);
}
