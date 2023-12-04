<?php
function getCmbinations($array, $k, $output = array(), $i = 0) {
    if ($k == 0) {
        echo implode(' ', $output ) . '<br>';
        return;
    }
    for ($i; $i < count($array); $i++) {
        if ($array[$i] > $k) {
            continue;
        }
        $output[] = $array[$i];
        getCmbinations($array, $k - $array[$i], $output, $i);
        array_pop($output);
    }
}
$nums = [2, 4, 6, 8];
$target = 8;
getCmbinations($nums, $target);
