<?php
function removeDuplicates($nums) {
    if (!is_array($nums))
        return;
        
    $i = 0;
    for ($j = 0; $j < count($nums); $j++) {
        if ($nums[$j] != $nums[$i]) {
            $i++;
            $nums[$i] = $nums[$j];
        }
    }

    return array_slice($nums, 0, $i+1);
}

$nums = [0,0,1,1,1,2,2,3,3,4];
print_r(removeDuplicates($nums));