<?php

namespace App\Http\Controllers;

use App\CoursesType;
use App\Material;
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
        return view('panel.courses', ['courses' => Course::orderBy('order', 'ASC')->get()]);
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

        $materials = $this->getAvailableMaterials($course);

        return view('panel.forms.course_edit', [
            'course' => $course,
            'types' => $allTypes,
            'options' => $types,
            'materials' => $materials
        ]);
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
            'material_ids' => 'sometimes|array'
        ]);
        if ($validator->fails()) {
            return redirect('/panel/courses/' . $id . '/edit')
                ->withInput()
                ->withErrors($validator);
        }

        if ($request->file('preview')) {
            $previewFileName = uniqid() . '_' . $request->file('preview')->getClientOriginalName();
            $request->file('preview')->storeAs('pics', $previewFileName);
        }
        if ($request->file('picture')) {
            $pictureFileName = uniqid() . '_' . $request->file('picture')->getClientOriginalName();
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

        $this->setAvailableMaterials($course, $request->get('material_ids'));

        return view('panel.course', ['course' => $course, 'materials' => $this->getAvailableMaterials($course)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->types()->detach();
        $course->delete();
        redirect('/panel/courses');
    }

    public function getAvailableMaterials(\App\Course $course){
        $materials = Material::isActive()->get();
        $courseMaterials = $course->materials->pluck('id')->toArray();

        return $materials->each(function ($item) use ($courseMaterials) {

            if (in_array($item->id, $courseMaterials, true))
                $item->available = true;
        });
    }

    public function setAvailableMaterials(\App\Course $course, array $materialIds){
        $materials = Material::whereIn('id', $materialIds)->get();

        $course->materials()->sync($materials);
    }
}
