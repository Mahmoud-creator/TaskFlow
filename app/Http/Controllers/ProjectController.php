<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Project::query();

        if ($request->has('filters')) {
            foreach ($request->filters as $field => $filter) {
                if (in_array($field, ['name', 'status'])) {
                    $operator = $filter['operator'] ?? '=';
                    $value = $filter['value'];
                    $query->where($field, $operator, $value);
                }
            }
        }

        if ($request->has('attributes')) {
            foreach ($request->attributes as $attribute => $filter) {
                $operator = $filter['operator'] ?? '=';
                $value = $filter['value'];
                $query->whereHas('attributeValues', function ($q) use ($attribute, $operator, $value) {
                    $q->whereHas('attribute', function ($q) use ($attribute) {
                        $q->where('name', $attribute);
                    })->where('value', $operator, $value);
                });
            }
        }

        $projects = $query->with('attributeValues')->get();
        return response()->json($projects);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
