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
        $request->validate([
            'title' => 'required|string',
            'type_id' => 'required|integer',
            'announcement' => 'required']);

        $course = Course::create($request->all());

        return view('panel.forms.course_edit', ['course' => $course, 'types' => CoursesType::all()]);
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
        $allTypes = CoursesType::all();

        $types = $allTypes->map(function ($type) use ($course) {
            if ($course->types->firstWhere('id', '=', $type->id)) {
                $type->selected = true;
            }
            return $type;
        });
        return view('panel.forms.course_edit', ['course' => $course, 'types' => $allTypes, 'options' => $types]);
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
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'preview' => 'sometimes|file',
            'picture' => 'sometimes|file',
            'type_id' => 'required|integer',
            'type_ids' => 'sometimes|array'
        ]);
        if ($validator->fails()) {
            return redirect('/panel/courses/' . $id . '/edit')
                ->withInput()
                ->withErrors($validator);
        }
        $timestamp = (new \DateTime())->format('Y-m-d H:i:s');
        if ($request->file('preview')) {
            $previewFileName = $timestamp . '_' . $request->file('preview')->getClientOriginalName();
            $request->file('preview')->storeAs('pics', $previewFileName);
        }
        if ($request->file('picture')) {
            $pictureFileName = $timestamp . '_' . $request->file('picture')->getClientOriginalName();
            $request->file('picture')->storeAs('pics', $pictureFileName);
        }
        $course = Course::find($id);
        $typeIds = $request->get('type_ids');
        $data = array_map(function($input) {
            return !is_array($input) ? $input : false;
        }, $request->all());
        $data = array_merge($data, [
            'preview' => $previewFileName ?? $course->preview,
            'picture' => $pictureFileName ?? $course->picture,
            'is_active' => $request->get('is_active') ?? null
        ]);
        $course->update($data);
        $course->types()->detach();
        if ($typeIds) {
            $course->types()->attach(array_values($typeIds));
        }
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
        $course = Course::findOrFail($id)->delete();
        redirect('/panel/courses');
    }
}
