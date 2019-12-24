<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        return view('panel.settings', ['settings' => Setting::all()]);
    }

    public function update($sysName, Request $request)
    {
        $request->validate(['value' => 'sometimes|string|max:10000']);
        $setting = Setting::find($sysName);

        $setting->value = $request->get('value');
        $setting->save();

        return new JsonResponse(['success' => true]);
    }
}
