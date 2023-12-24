<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $active = 'course';
        $data = Course::all();
        return view("course.course", compact('data', 'active'));
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
        Course::create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $active = 'course';
        $data = Course::findOrFail($id);
        return view('course.course-show', compact('data', 'active'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $active = "editCourse";
        $data = Course::findOrFail($id);
        return view('course.course-edit', compact('data', 'active'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = Course::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('course.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Course::findOrFail($id);
        $data->delete();
        return redirect()->back();
    }
}
