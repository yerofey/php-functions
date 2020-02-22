<?php

/**
 * Memory effective read file line by line
 *
 * @param string $filename
 * @return void
 */
function readFileLines(string $filename)
{
    $file = fopen($filename, 'r');

    while (($line = fgets($file)) !== false) {
        yield $line;
    }

    fclose($file);
}
