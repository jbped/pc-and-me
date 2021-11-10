<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PartSpec;
use App\Models\PartSpecValue;

class PartSpecValueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        //
        $spec = PartSpec::find($id);
        $request = collect($request)->put('part_spec_id', $spec->id);

        if (!$spec) {
            return response()->json(['error' => 'Spec Type Not Found', 'requested_id' => $id], 404);
        }

        $dataType = $spec->data_type;
        $filteredValues = removeNullValues($request->toArray());

        if (count($filteredValues) != 3) {
            return response()->json(['error' => 'Spec Value Body Missing Critical Data'], 400);
        }

        if (!array_key_exists($dataType . '_value', $filteredValues)) {
            return response()->json([
                'error' => 'Provided value does not match required value data type',
                'required_data_type' => $dataType,
            ], 400);
        }

        $value = PartSpecValue::create($filteredValues);
        return $value;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $spec = PartSpecValue::with([
            'part:id,part_type_id,manufacturer,product_name',
            'part.partType',
            'spec'
        ])
            ->where('id', $id)
            ->first();

        if (!$spec) {
            return response()->json(['error' => 'Spec Not Found', 'requested_id' => $id], 404);
        }

        $trimmedSpec = removeNullValues($spec->toArray());
        return $trimmedSpec;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $value = PartSpecValue::find($id);

        if (!$value) {
            return response()->json(['error' => 'Spec Value Not Found', 'requested_id' => $id], 404);
        }

        $value->update($request->all());

        $trimmedValue = removeNullValues($value->toArray());
        return $trimmedValue;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $value = PartSpecValue::find($id);

        if (!$value) {
            return response()->json(['error' => 'Spec Value Not Found', 'requested_id' => $id], 404);
        }

        $value->delete();
        return response()->json('response content', 204);
    }
}
