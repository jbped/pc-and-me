<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PartType;

class PartTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $types = PartType::all()->sortBy('type_short');
        return $types;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $type = PartType::create($request->all());
        return $type;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($partType)
    {
        //
        $type = PartType::where('type_short', $partType)
            ->with('parts:id,part_type_id,product_name,manufacturer', 'parts.specValues')
            ->first();
        if (!$type) {
            return response()->json(['error' => 'Type Not Found', 'requested_id' => $partType]);
        }
        $collection = collect($type)
            ->prepend(
                count($type->parts),
                $partType . '-count'
            );

        return $collection;
    }

    /**
     * Display all part specs associated with declared type
     */
    public function getSpecTypes($partType)
    {
        $type = PartType::with('typeSpecs')->where('type_short', $partType)->get();
        if (!$type) {
            return response()->json(['error' => 'Type Not Found', 'requested_id' => $type]);
        }

        return $type;
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
        $type = PartType::find($id);
        if (!$type) {
            return response()->json(['error' => 'Part Type Not Found', 'requested_id' => $id], 404);
        }
        $type->update($request->all());
        return $type;
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
        $type = PartType::find($id);
        if (!$type) {
            return response()->json(['error' => 'Part Type Not Found', 'requested_id' => $id], 404);
        }
        $type->delete();
        return response(204);
    }
}
