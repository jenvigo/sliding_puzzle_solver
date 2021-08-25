<?php


use App\Helper;
use PHPUnit\Framework\TestCase;

class HelperTest extends TestCase
{

    public function testCoordinate_finder()
    {
        $arr = [
            [1, 2, 3, 4],
            [5, 6, 7, 8],
            [9, 10, 11, 12],
            [13, 14, 15, 0]
        ];

        $c = Helper::coordinate_finder(1, $arr);

        $this->assertEquals($c, [0, 0]);
        $this->assertEquals($c, [0, 0]);

    }
}
