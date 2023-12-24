<?php

namespace App\Http\Controllers;

use App\Models\{Material, Course};
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $active = 'material';
        $passing = Course::all();
        $data = Material::all();
        return view('material.index', compact('data', 'passing', 'active'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Material::create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $active = 'show';
        $data = Material::findOrFail($id);
        return view('material.material-show', compact('data', 'active'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Material $material)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Material $material)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Material::findOrFail($id);
        $data->delete();
        return redirect()->back();
    }
}
