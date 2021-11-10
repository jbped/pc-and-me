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

function formatSpec(object $spec)
{
    return [
        'part_spec_id' => $spec->part_spec_id,
        'int_value' => $spec->int_value,
        'string_value' => $spec->string_value,
        'text_value' => $spec->text_value,
        'boolean_value' => $spec->boolean_value
    ];
}

function formatPartWithSpecs(object $data)
{
    $nullRemovedSpecs = $data->part->specValues->map(function ($spec) {
        $trimmedSpec = formatSpec($spec);
        return removeNullValues($trimmedSpec);
    });

    // $partType = $data->part?->partType->type_short
    //     ? $data->part->partType->type_short
    //     : $data->partType->type_short;

    // $partManufacturer = $data->part?->partType->manufacturer
    //     ? $data->part->partType->manufacturer
    //     : $data->partType->manufacturer;

    // $partName = $data->part?->partType->product_name
    //     ? $data->part->partType->product_name
    //     : $data->partType->product_name;

    $formattedPart = [
        'id' => $data->id,
        'part_id' => $data->part_id,
        'description' => $data->description,
        'part_type' => $data->part->partType->type_short,
        'manufacturer' => $data->part->partType->manufacturer,
        'product_name' => $data->part->partType->product_name,
        'spec_values' => $nullRemovedSpecs
    ];
    return $formattedPart;
}

//TODO refactor to work with parts queried directly from parts table, currently only works with eager loaded parts
function formatPart(object $data)
{
    // $partType = $data->part?->partType->type_short
    //     ? $data->part->partType->type_short
    //     : $data->partType->type_short;

    // $partManufacturer = $data->part?->partType->manufacturer
    //     ? $data->part->partType->manufacturer
    //     : $data->partType->manufacturer;

    // $partName = $data->part?->partType->product_name
    //     ? $data->part->partType->product_name
    //     : $data->partType->product_name;

    $formattedPart = [
        'id' => $data->id,
        'part_id' => $data->part_id,
        'description' => $data->description,
        'part_type' => $data->part->partType->type_short,
        'manufacturer' => $data->part->partType->manufacturer,
        'product_name' => $data->part->partType->product_name
    ];
    return $formattedPart;
}
