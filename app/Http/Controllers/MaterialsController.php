<?php

namespace App\Http\Controllers;

use App\Material;
use App\MaterialType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

class MaterialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('panel.materials', ['materials' => Material::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.forms.material_create', ['types' => MaterialType::all()]);
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
            'title' => 'string|required',
            'type_id' => 'integer|required|not_in:0',
            'is_active' => 'required|boolean'
        ]);

        $material = Material::create($request->all());

        return view('panel.forms.material_edit', [
            'material' => $material,
            'types' => MaterialType::all()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('panel.forms.material_edit', [
            'material' => Material::findOrFail($id),
            'types' => MaterialType::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $request->validate([
            'title' => 'string|required',
            'type_id' => 'integer|required|not_in:0',
        ]);

        $material = Material::findOrFail($id);
        $params = $request->all();
        $params['is_active'] = $params['is_active'] ?? 0;
        $material->update($params);
        return view('panel.forms.material_edit', [
            'material' => $material,
            'types' => MaterialType::all()
        ]);
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

    public function getFile($id) {

        $material = Material::findOrFail($id);


        if (!$material->link) {
            throw new \Exception("Файл не найден");
        }

        $path = "public/" . $material->link;
        $mimetype = Storage::disk('local')->mimeType($path);
        $headers = array('Content-Type' => $mimetype);
        $extension = explode('.', $material->link)[1];

        return Storage::disk('local')->download($path, $material->title . '.' . $extension, $headers);
    }
}
