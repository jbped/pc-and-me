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
        $builds = Build::all();
        $buildsCount = count($builds);
        return response([
            'count' => $buildsCount,
            'builds' => $builds
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

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
        $build = Build::find($id);
        if (!$build) {
            return response()->json(['error' => 'Build Not Found', 'requested_id' => $id], 404);
        }

        return response($build);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $build = Build::findOrFind($id);

        if (!$build) {
            return response()->json(['error' => 'Build Not Found', 'requested_id' => $id], 404);
        }

        $build->delete();
        return response(204);
    }
}
