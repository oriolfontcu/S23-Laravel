<?php

namespace App\Http\Controllers;

use App\Models\Concert;
use App\Http\Requests\StoreConcertRequest;
use App\Http\Requests\UpdateConcertRequest;

class ConcertController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $concerts = Concert::all();
        return response()->json($concerts, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreConcertRequest $request)
    {
        $concert = Concert::create($request->all());
        return $response()->json($concert, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Concert $concert)
    {
        return response()->json($concert, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateConcertRequest $request, Concert $concert)
    {
        $concert = Concert::update($request->all());
        return $response()->json($concert, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Concert $concert)
    {
        $concert->delete();
        return response()->json($concert, 204);
    }
}
