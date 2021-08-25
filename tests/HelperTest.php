<?php


use App\Helper;
use PHPUnit\Framework\TestCase;

class HelperTest extends TestCase
{

    public function provider()
    {
        return array(
            array(1, [0, 0]),
            array(2, [0, 1]),
            array(100, false),
            array(true, false),
            array(false, false),
            array("string", false),
        );
    }

    /**
     * @dataProvider provider
     *
     */
    public function testCoordinate_finder($number, $coords_expectd)
    {
        $arr = [
            [1, 2, 3, 4],
            [5, 6, 7, 8],
            [9, 10, 11, 12],
            [13, 14, 15, 0]
        ];

        $c = Helper::coordinate_finder($number, $arr);
        $this->assertEquals($c, $coords_expectd);
    }
}
