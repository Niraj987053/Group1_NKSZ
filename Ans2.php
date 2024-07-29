<?php
function findUniqueNumber($arr) {
    $unique = 0;
    foreach ($arr as $num) {
        $unique ^= $num;
    }
    return $unique;
}

// Example usage
$sampleArray = array(5, 3, 4, 3, 4);
$uniqueNumber = findUniqueNumber($sampleArray);
echo "The unique number in the array is: " . $uniqueNumber;
?>