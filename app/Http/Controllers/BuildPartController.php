<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BuildPart;

class BuildPartController extends Controller
{
    /**
     * Display all build parts associated with provided build_id
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $parts = BuildPart::where('build_id', $id)
            ->with('part:id,part_type_id,manufacturer,product_name')
            ->get();

        if (!$parts || count($parts) === 0) {
            return response()->json([
                'error' => 'Build Parts not Found',
                'requested_build_id' => $id
            ], 404);
        }

        $formattedParts = $parts->map(function ($part) {
            return formatPart($part);
        });

        return $formattedParts;
    }

    /**
     * Store a newly created build part in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        //
        $buildParts = $request->build_parts;

        $savedParts = collect([]);

        // Iterate through each provided part, store them in build_parts table, push to savedParts collection
        foreach ($buildParts as $part) {
            $part['build_id'] = intval($id);
            $savedPart = BuildPart::create($part);
            $savedParts->push($savedPart);
        }

        // return the assembled savedParts collection
        return $savedParts;
    }

    /**
     * Display the specified build part.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $partId)
    {
        //
        $part = BuildPart::where('build_id', $id)
            ->where('id', $partId)
            ->with([
                'part:id,part_type_id,manufacturer,product_name', // include part info
                'part.partType:id,type_short', // include part type info
                'part.specValues' // include associated part spec values
            ])
            ->first();

        if (!$part) {
            return response()->json([
                'error' => 'Build Part not Found',
                'requested_id' => $partId
            ], 404);
        }

        $formattedPart = formatPartWithSpecs($part);

        return $formattedPart;
    }

    /**
     * Update the specified build part in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $partId)
    {
        //
        $part = BuildPart::where('build_id', $id)
            ->where('id', $partId)
            ->first();

        if (!$part) {
            return response()->json([
                'error' => 'Build Part not Found',
                'requested_id' => $id
            ], 404);
        }
        $part->update($request->all());

        // Return an objects that contains the updated part and its relational data
        $updatedPart = $this->show($id, $partId);
        return $updatedPart;
    }

    /**
     * Remove the specified build part from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $partId)
    {
        //
        $part = BuildPart::where('build_id', $id)
            ->where('id', $partId)
            ->first();

        if (!$part) {
            return response()->json([
                'error' => 'Build Part not Found',
                'requested_id' => $id
            ], 404);
        }

        $part->delete();

        //TODO instead of returning empty 204, perhaps return an updated buildParts array

        return response()->json('response content', 204);
    }
}
