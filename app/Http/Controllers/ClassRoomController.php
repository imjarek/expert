<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Course;

class ClassRoomController extends Controller
{
    public function __construct()
    {

    }

    public function showClassroom()
    {
        $user = Auth::user();

        if (!$user->courses){
            return Redirect::to('/main')->withErrors(['У Вас пока нет доступа к курсам. Отправьте заявку или свяжитесь с администраторм!']);
        }
        $courses = $user->courses;
        return view('classroom.courses', ['courses' => $courses]);
    }

    public function showCourse($id)
    {

        $course = Course::findOrFail($id);
        $user = Auth::user();

        if (!$user || !$user->courses || !$user->courses->firstWhere('id', $id)){
            return Redirect::to('/main')->withErrors(['У Вас пока нет доступа к курсам. Отправьте заявку или свяжитесь с администраторм!']);
        }

        return view('classroom.course', ['course' => $course]);
    }
}
