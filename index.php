<?php

function findUnsortedSubarray(array $items): array {

$unsorted = $items;
sort($items);

$left = null;
$right = null;

foreach($unsorted as $key => $unsortedItem) {
    if ($unsortedItem !== $items[$key]) {
        $lastUnmatchedIndex = $key; 
        
        if (!$left) {
            $left = $key;
        } else {
            if (!isset($unsorted[$key + 1]) || $unsorted[$key + 1] === $items[$key +1]) {
                $right = $key;
            }
        }
        
    }
}

return [$left, $right];
}

print_r(findUnsortedSubarray([1, 4, 3, 2, 3, 4]));