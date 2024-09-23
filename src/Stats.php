<?php

namespace Artyom\Stats;

use artyom\Stats\Functions\Average;
use artyom\Stats\Functions\Median;

class Stats
{

    public function average($list): float
    {
        return Average::calculate($list);
    }

    public function median($list): float
    {
        return Median::calculateMedian($list);
    }
}
