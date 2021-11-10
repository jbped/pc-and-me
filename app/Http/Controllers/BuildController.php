<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Build;

class BuildController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $builds = Build::all()->sortByDesc('created_at');
        $buildsCount = count($builds);
        return response()->json([
            'count' => $buildsCount,
            'builds' => $builds
        ]);
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
        $build = Build::create($request->all());
        return $build;
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
        $build = Build::with([
            'buildParts:id,build_id,part_id,description',
            'buildParts.part:id,part_type_id,manufacturer,product_name',
            'buildParts.part.partType:id,type_short',
            'buildParts.part.specValues'
        ])
            ->where('id', $id)
            ->first();

        if (!$build) {
            return response()->json(['error' => 'Build Not Found', 'requested_id' => $id], 404);
        }

        $formattedParts = collect([]);
        foreach ($build->buildParts as $buildPart) {
            $formattedPart = formatPartWithSpecs($buildPart);
            $formattedParts->push($formattedPart);
        }

        return $formattedParts;
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
        $build = Build::find($id);

        if (!$build) {
            return response()->json(['error' => 'Build Not Found', 'requested_id' => $id], 404);
        }

        $build->update($request->all());
        return $build;
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
        $build = Build::find($id);

        if (!$build) {
            return response()->json(['error' => 'Build Not Found', 'requested_id' => $id], 404);
        }

        $build->delete();
        return response()->json('response content', 204);
    }
}
