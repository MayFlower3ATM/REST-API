<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(People::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $person = People::create($request->all());
        return response()->json($person, 200); 
    }

    /**
     * Display the specified resource.
     */
    public function show(People $person)
    {
        return response()->json($person, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, People $person)
    {
        $person->update($request->all());
        return response()->json($person, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(People $person)
    {
        $person->delete();
        return response(null, 204);
    }
}
