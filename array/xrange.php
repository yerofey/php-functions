<?php

/**
 * Memory effective range()
 *
 * @param integer $start
 * @param integer $limit
 * @param integer $step
 * @return void
 */
function xrange(int $start, int $limit, int $step = 1)
{
    if ($start <= $limit) {
        if ($step <= 0) {
            throw new LogicException('Step must be positive');
        }

        for ($i = $start; $i <= $limit; $i += $step) {
            yield $i;
        }
    } else {
        if ($step >= 0) {
            throw new LogicException('Step must be negative');
        }

        for ($i = $start; $i >= $limit; $i += $step) {
            yield $i;
        }
    }
}
