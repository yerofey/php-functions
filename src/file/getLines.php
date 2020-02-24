<?php

/**
 * Memory effective read file line by line
 *
 * @param string $filename
 * @return void
 */
function getLines(string $filename)
{
    $file = fopen($filename, 'r');

    try {
        while (($line = fgets($file)) !== false) {
            yield $line;
        }
    } finally {
        fclose($file);
    }
}
