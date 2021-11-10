<?php
function removeNullValues(array $data)
{
    $filteredArray = [];
    foreach ($data as $key => $value) {
        if ($value || $value === 0) {
            $filteredArray[$key] = $value;
        }
    }
    return $filteredArray;
}

function formatPartWithSpecs(object $data)
{
    $nullRemovedSpecs = $data->part->specValues->map(function ($spec) {
        $trimmedSpec = [
            'part_spec_id' => $spec->part_spec_id,
            'int_value' => $spec->int_value,
            'string_value' => $spec->string_value,
            'text_value' => $spec->text_value,
            'boolean_value' => $spec->boolean_value
        ];
        return removeNullValues($trimmedSpec);
    });

    $formattedPart = [
        'id' => $data->id,
        'part_id' => $data->part_id,
        'description' => $data->description,
        'part_type' => $data->part->partType->type_short,
        'manufacturer' => $data->part->manufacturer,
        'product_name' => $data->part->product_name,
        'spec_values' => $nullRemovedSpecs
    ];
    return $formattedPart;
}
function formatPart(object $data)
{
    $formattedPart = [
        'id' => $data->id,
        'part_id' => $data->part_id,
        'description' => $data->description,
        'part_type' => $data->part->partType->type_short,
        'manufacturer' => $data->part->manufacturer,
        'product_name' => $data->part->product_name,
    ];
    return $formattedPart;
}
