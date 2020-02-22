<?php

/**
 * Memory effective range()
 *
 * @param integer $start
 * @param integer $end
 * @return void
 */
function xrange(int $start, int $end)
{
    for ($i = $start; $i <= $end; $i++) {
        yield $i;
    }
}
