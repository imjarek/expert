<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function imageUpload()
    {
        return view('imageUpload');
    }

    public function imageUploadPost()
    {
        request()->validate([

            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $imageName = time().'.'.request()->file->getClientOriginalExtension();

        request()->file->move(public_path('images/uploads'), $imageName);
        return "/images/uploads/$imageName";
    }
}
