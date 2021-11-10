<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PartSpec;
use App\Models\PartType;

class PartSpecController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $specs = PartSpec::all();
        return $specs;
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
        $type = PartType::where('type_short', $partType)
            ->select('id')
            ->first()
            ->id;

        switch ($request->data_type) {
            case ('int'):
                break;
            case ('string'):
                break;
            case ('text'):
                break;
            case ('boolean'):
                break;
            default:
                return response()->json([
                    'error' => 'Invalid Data Type',
                    'provided_data_type' => $request->data_type,
                    'approved_data_types' => "'int', 'string', 'text', or 'boolean'"
                ], 400);
        }

        $spec = new PartSpec;
        $spec->part_type_id = $type;
        $spec->name = $request->name;
        $spec->data_type = $request->data_type;
        $spec->details = $request->details;
        $spec->save();

        return $spec;
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
        $specs = PartSpec::where('id', $id)
            ->with('values')
            ->get();

        return $specs;
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
    }
}
