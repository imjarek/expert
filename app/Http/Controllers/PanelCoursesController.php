<?php

namespace App\Http\Controllers;

use App\CoursesType;
use Illuminate\Http\Request;
use App\Course;
use Illuminate\Support\Facades\Validator;

class PanelCoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('panel.courses', ['courses' => Course::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.forms.course_create', ['courses_types' => CoursesType::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['title' => 'required|string', 'type_id' => 'required|integer', 'announcement' => 'required']);

        Course::create($request->all());

        return view('panel.forms.course_edit');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::find($id);
        return view('panel.course', ['course' => $course]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $course = Course::find($id);
        return view('panel.forms.course_edit', ['course' => $course, 'courses_types' => CoursesType::all()]);
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
        $validator = Validator::make($request->all(), ['title' => 'required']);
        if ($validator->fails()) {
            return redirect('/panel/courses/' . $id . '/edit')
                ->withInput()
                ->withErrors($validator);
        }

        $course = Course::find($id);
        $course->update($request->all());
        return view('panel.course', ['course' => $course]);
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
