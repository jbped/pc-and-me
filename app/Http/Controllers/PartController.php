<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Part;

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
        $parts = Part::all();
        return $parts;
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
        $part = Part::create($request->all());
        return $part;
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
        $part = Part::find($id);
        if (!$part) {
            return response()->json([
                'error' => 'Part not Found',
                'requested_part' => $id
            ], 404);
        }
        return $part;
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
