<?php

namespace App\Http\Controllers;

use App\Material;
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
        return view('classroom.courses', ['user' => $user, 'courses' => $courses]);
    }

    public function showCourse($id)
    {

        $course = Course::findOrFail($id);
        $user = Auth::user();

        if (!$user || !$user->courses || !$user->courses->firstWhere('id', $id)){
            return Redirect::to('/main')->withErrors(['У Вас пока нет доступа к курсам. Отправьте заявку или свяжитесь с администраторм!']);
        }

        return view('classroom.course', ['user' => $user, 'course' => $course]);
    }

    public function viewContent($id)
    {

        $material = Material::findOrFail($id);

        switch ($material->type->name) {

            case 'presentation':
                return redirect('/class_room/view#/storage/'. $material->link);
                break;
            case 'video':
            default:
                return view('classroom.videoplayer', ['material' => $material]);
                break;
        }

    }
}
