<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClassRoomController extends Controller
{
    public function showClassrooms($orderId)
    {
        //Auth::attempt(['email' => 'filimonova_o@list.ru', 'password' => '1qaz2wsxf']);

        $user = Auth::user();

        if ($user->order && $user->order->uuid != $orderId){
            throw new \Exception('Извините, страницы не существует', 404);
        }
        $courses = $user->order->courses;
        return view('classroom.courses', ['courses' => $courses]);
    }

    public function showClassroom()
    {
        return view('classroom.course');
    }
}
