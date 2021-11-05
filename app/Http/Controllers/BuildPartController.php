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
        $parts = BuildPart::where('build_id', $id)->get();
        if (!$parts) {
            return response()->json([
                'error' => 'Build not Found',
                'requested_id' => $id
            ], 404);
        }
        return $parts;
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
        $request->build_id = $id;
        $part = BuildPart::create($request->all());
        return $part;
    }

    /**
     * Display the specified build part.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $part = BuildPart::find($id);
        if (!$part) {
            return response()->json([
                'error' => 'Build Part not Found',
                'requested_id' => $id
            ], 404);
        }
        return $part;
    }

    /**
     * Update the specified build part in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $part = BuildPart::find($id);
        if (!$part) {
            return response()->json([
                'error' => 'Build Part not Found',
                'requested_id' => $id
            ], 404);
        }
        $part->update($request->all());
        return $part;
    }

    /**
     * Remove the specified build part from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $part = BuildPart::find($id);
        if (!$part) {
            return response()->json([
                'error' => 'Build Part not Found',
                'requested_id' => $id
            ], 404);
        }
        $part->delete($id);
        return response()->json('response content', 204);
    }
}
