<?php

namespace App\Http\Controllers;

use App\Material;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Utility\FileUploader as Uploader;

class FileUploadController extends Controller {

    public $uploader;
    public function __construct()
    {
        $this->uploader = new Uploader();
        ini_set('upload_max_filesize', '512M');
    }

    public function upload(Request $request)
    {

        $path = $request->file('files')[0]->store('materials');

        if($request->get('material_id')){
            $material = Material::findOrFail($request->get('material_id'));
            $material->link = $path;
            $material->save();
        }

        return new JsonResponse(['filename' => $path]);
    }


    public function remove(Request $request)
    {
        $request->validate(['filename' => 'required|string']);

        $file = 'storage/media/' . $request->get('filename');
        if(file_exists($file)){
            unlink($file);
        }
    }
}
