<?php

namespace langdonglei;

use Exception;

class Countdown
{
    /**
     * @param int $second
     * @param string $prefix
     * @param int $pad_len
     * @param string $pad_str
     * @throws Exception
     */
    public static function begin(int $second, string $prefix = '', int $pad_len = 6, string $pad_str = ' ')
    {
        if ($second < 0) {
            throw new Exception('second < 0');
        }
        if ($second > 0) {
            echo $prefix . ' ' . str_repeat($pad_str, $pad_len);
            for ($i = $second; $i--;) {
                echo "\033[{$pad_len}D";
                echo str_pad($i, $pad_len, $pad_str, STR_PAD_LEFT);
                sleep(1);
                if ($i == 0) {
                    echo PHP_EOL;
                }
            }
        }
    }
}