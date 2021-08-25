<?php


namespace App;


class Helper
{

    public static function coordinate_finder($number, $array)
    {
        foreach ($array as $x => $r) {
            foreach ($r as $y => $item) {
                if ($item == $number) {
                    return [$x, $y];
                }
            }
        }
        return false;
    }
}
