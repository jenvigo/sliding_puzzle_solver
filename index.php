<?php
include_once 'vendor/autoload.php';
$simpleExample = [
    [1, 2, 3, 4],
    [5, 0, 6, 8],
    [9, 10, 7, 11],
    [13, 14, 15, 12]
];
$end = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12],
    [13, 14, 15, 0]
];

//todo: get the A* map of H and G cost

foreach ($simpleExample as $x => $r) {
    foreach ($r as $y => $item) {
        $coordinates_tile = ["x" => $x, "y" => $y];
        $ct = $coordinates_tile;
        $homonym_in_end = $end[$ct["x"]][$ct["y"]];
        if ($item == $homonym_in_end) {
            $distance = 0;
        } else {
            /*todo: distance should be a bit more self-explaining
            the cost? h cost? f cost? sum?
            todo: two methods, one for getting the coordinates of a number in the array
            todo: another for checking one many steps are away than where it's supposed to be placed
            */
            $coords = App\Helper::coordinate_finder($item, $end);
            /*use the algorithm...a*??  */

            $distance = " ";
        }
        $arr_distance[$x][$y] = $distance;

    }
}
print_matrix($arr_distance);
function print_matrix($arr)
{
    foreach ($arr as $row) {
        foreach ($row as $item) {
            echo $item;
            echo ", ";
        }
        echo "\n";
    }
}
