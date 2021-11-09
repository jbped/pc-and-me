<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Part;
use App\Models\PartType;

class PartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $parts = Part::with('partType:id,type_short')
            ->get();
        return $parts;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $partType)
    {
        //
        $type = PartType::where('type_short', $partType)->select('id')->first();

        $request->part_type_id = $type->id;

        // $part = Part::create($request->all());

        $part = new Part;
        $part->part_type_id = $type->id;
        $part->manufacturer = $request->manufacturer;
        $part->product_name = $request->product_name;
        return $part->save();

        // return $part;
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
        $part = Part::with([
            'partType:id,type_short',
            'specValues:id,part_id,part_spec_id,int_value,string_value,text_value,boolean_value',
            'specValues.spec'
        ])
            ->where('id', $id)
            ->first();

        if (!$part) {
            return response()->json([
                'error' => 'Part not Found',
                'requested_part' => $id
            ], 404);
        }
        $type = $part->partType->type_short;
        $nullRemovedSpecs = $part->specValues->map(function ($spec) {
            $trimmedSpec = [
                'part_spec_id' => $spec->part_spec_id,
                'int_value' => $spec->int_value,
                'string_value' => $spec->string_value,
                'text_value' => $spec->text_value,
                'boolean_value' => $spec->boolean_value
            ];
            return removeNullValues($trimmedSpec);
        });
        $collection = collect($part)->replace(['part_type' => $type, 'spec_values' => $nullRemovedSpecs]);

        return $collection;
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
        $part = Part::find($id);
        if (!$part) {
            return response()->json([
                'error' => 'Part not Found',
                'requested_part' => $id
            ], 404);
        }
        $part->update($request->all());
        return $part;
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
        $part = Part::find($id);
        if (!$part) {
            return response()->json([
                'error' => 'Part not Found',
                'requested_part' => $id
            ], 404);
        }
        $part->delete();
        return response()->json('response content', 204);
    }
}
