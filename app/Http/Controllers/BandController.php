<?php

namespace App\Http\Controllers;

use App\Models\Band;
use App\Http\Requests\StoreBandRequest;
use App\Http\Requests\UpdateBandRequest;

class BandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bands = Band::all();
        return response()->json($bands, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBandRequest $request)
    {
        $band = Band::create($request->all());
        return response()->json($band, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Band $band)
    {
        return response()->json($band, 200);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBandRequest $request, Band $band)
    {
        $band = Band::update($request->all());
        return response()->json($band, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Band $band)
    {
        $band->delete();
        return response()->json($band, 204);
    }
}
