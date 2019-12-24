<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function mainPage()
    {
        $data = (new CoursesController())->index();

        $defaults = array(
            'schedule' => env('DEFAULT_SCHEDULE'),
            'expert' => env('DEFAULT_EXPERT')
        );

        return view('main', ['defaults' => $defaults, 'settings'=> $this->getSettings(), 'courses' => $data['courses']]);
    }
    public function imageUpload()
    {
        return view('imageUpload');
    }

    public function imageUploadPost()
    {
        request()->validate([

            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $imageName = uniqid().'.'.request()->file->getClientOriginalExtension();

        request()->file->move(public_path('images/uploads'), $imageName);
        return "/images/uploads/$imageName";
    }

    public function getSettings()
    {
        $settings = [];
        foreach (Setting::all() as $setting){
            $settings[$setting->system_name] = $setting['value'];
        }
        return $settings;
    }
}
