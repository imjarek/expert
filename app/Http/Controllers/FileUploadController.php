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

        $response = array();
        $data = $this->uploader->upload($_FILES['files'], array(
            'limit' => 10, //Maximum Limit of files. {null, Number}
            'maxSize' => 10, //Maximum Size of files {null, Number(in MB's)}
            'extensions' => null, //Whitelist for file extension. {null, Array(ex: array('jpg', 'png'))}
            'required' => false, //Minimum one file is required for upload {Boolean}
            'uploadDir' => '../../../uploads/', //Upload directory {String}
            'title' => array('name'), //New file name {null, String, Array} *please read documentation in README.md
            'removeFiles' => true, //Enable file exclusion {Boolean(extra for jQuery.filer), String($_POST field name containing json data with file names)}
            'replace' => false, //Replace the file if it already exists  {Boolean}
            'perms' => null, //Uploaded file permisions {null, Number}
            'onCheck' => null, //A callback function name to be called by checking a file for errors (must return an array) | ($file) | Callback
            'onError' => null, //A callback function name to be called if an error occured (must return an array) | ($errors, $file) | Callback
            'onSuccess' => null, //A callback function name to be called if all files were successfully uploaded | ($files, $metas) | Callback
            'onUpload' => null, //A callback function name to be called if all files were successfully uploaded (must return an array) | ($file) | Callback
            'onComplete' => null, //A callback function name to be called when upload is complete | ($file) | Callback
            'onRemove' => null //A callback function name to be called by removing files (must return an array) | ($removed_files) | Callback
        ));

        if($data['isComplete']){
            $files = $data['data'];

            $response['result'] = $files['metas'][0]['name'];
        }

        if($data['hasErrors']){
            $errors = $data['errors'];
            $response['errors'] = $errors;
        }

        return new JsonResponse($response);
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
