<?php
function removeNullValues(array $data)
{
    $filteredArray = [];
    foreach ($data as $key => $value) {
        if ($value) {
            $filteredArray[$key] = $value;
        }
    }
    return $filteredArray;
}
