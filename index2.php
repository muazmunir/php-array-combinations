<?php

function findCombinations($arr, $k) {
    $result = [];
    generateCombinations($arr, $k, 0, [], $result);
    return $result;
}

function generateCombinations($arr, $remainingSum, $startIndex, $currentList, &$result) {
    if ($remainingSum === 0) {
        $result[] = $currentList;
        return;
    }

    for ($i = $startIndex; $i < count($arr); $i++) {
        if ($remainingSum - $arr[$i] >= 0) {
            $newList = $currentList;
            $newList[] = $arr[$i];
            generateCombinations($arr, $remainingSum - $arr[$i], $i, $newList, $result);
        }
    }
}

// Example usage
$nums = [2, 4, 6, 8];
$target = 8;
$combinations = findCombinations($nums, $target);

// Output the combinations
foreach ($combinations as $combination) {
    echo implode(' ', $combination) . "<br>";
}
?>
