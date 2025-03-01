<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attribute;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'type' => 'required|in:text,date,number,select',
        ]);
    
        $attribute = Attribute::create($request->only(['name', 'type']));
    
        return response()->json($attribute, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Attribute $attribute)
    {
        $request->validate([
            'name' => 'sometimes|string',
            'type' => 'sometimes|in:text,date,number,select',
        ]);
    
        $attribute->update($request->only(['name', 'type']));
    
        return response()->json($attribute);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
