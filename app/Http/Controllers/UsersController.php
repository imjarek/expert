<?php

namespace App\Http\Controllers;

use App\Mail\UserEnrolled;
use App\Roles;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Mail;
use Log;
use Notification;
use App\Notifications\UserEnrolled as UserEnrolledSms;
use App\User;
use App\Course;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::all();
    }

    public function getAdmins() {
        return view('panel.users',
            ['users' => User::where('role_id', 1)->get()]
        );
    }

    public function getStudents() {
        return view('panel.users',
            ['users' => User::where('role_id', 2)->get()]
        );
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('panel.forms.user_create', ['roles' => Roles::all()]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return User::findOrFail($id);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('panel.forms.user_edit', [
            'user' => $user,
            'roles' => Roles::all(),
            'courses' => $this->getAvailableCourses($user)
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'string|required',
            'second_name' => 'string|required',
            'last_name' => 'string|required',
            'role_id' => 'integer|required',
            'phone' => 'required|string|min:10|max:12',
            'email' => 'present|email',
            'password' => 'required|string'
        ]);

        $request->replace(['password' => Hash::make($request->password)]);

        $user = User::create($request->all());

        return view('panel.forms.user_edit', [
            'user' => $user,
            'roles' => Roles::all()
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
        $request->validate([
            'first_name' => 'string|required',
            'second_name' => 'string|required',
            'last_name' => 'string|required',
            'role_id' => 'integer|required',
            'phone' => 'required|string|min:10|max:12',
            'email' => 'present|email',
            'course_id' => 'sometimes|array'
        ]);

        $user = User::findOrFail($id);

        $params = $request->all();
        if ($request->get('password')) {
            $params['password'] = Hash::make($params['password']);
        } else {
            unset($params['password']);
        }

        $params['is_active'] = $params['is_active'] ?? 0;
        $user->update($params);

        $user->role()->associate(Roles::find($params['role_id']))->save();
        
        if (!empty($params['course_id'])) {
            $courses = $this->setAvailableCourses($user, $params['course_id']);
        } else {
            $user->courses()->detach();
        }

        return view('panel.forms.user_edit', [
            'user' => $user,
            'roles' => Roles::all(),
            'courses' => $this->getAvailableCourses($user)
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
        User::findOrFail($id)->delete();
    }

    public function enroll(Request $request){

        $request->validate([
            'name' => 'required',
            'phone' => 'required|string|min:9|max:12',
        ]);

        $to = User::where('email', env('MAIL_TO'))->first();
        $user = User::where('phone', $request->get('phone'))->first();

        if (!$user) {
            $password = random_bytes(6);
            $user = User::create([
                'email' => 'fakeemail'. substr(uniqid(), 6, 12)  .'@list.ru',
                'first_name' => $request->get('name'),
                'second_name' => 'Без имени',
                'last_name' => 'Авторегистрация',
                'phone' => $request->get('phone'),
                'password' => Hash::make($password),
                'role_id' => 2
            ]);
        }

        $request->merge(['user_id' => $user->id]);

        if (!$to) {
            $password = random_bytes(6);
            $to = User::create([
                'email' => env('MAIL_TO'),
                'first_name' => 'Получатель',
                'second_name' => 'Авто',
                'last_name' => 'Почты',
                'phone' => $request->get('phone'),
                'password' => Hash::make($password),
                'role_id' => 2
            ]);
        }
        Mail::to($to)->send(new UserEnrolled($request->all()));

        try {
            Notification::route('twilio', env('PHONE_TO'))
                ->notify(new UserEnrolledSms($request->all()));
        } catch (\Exception $e) {
            Log::error('Could not send sms: ' . $e->getMessage());
        }
        return view('enrolled', ['data' => $request->all()]);
    }

    public function getAvailableCourses(\App\User $user){
        $courses = Course::isActive()->get();
        $userCourses = $user->courses->pluck('id')->toArray();

        return $courses->each(function ($item) use ($userCourses) {

            if (in_array($item->id, $userCourses, true))
                $item->available = true;
        });
    }

    public function setAvailableCourses(\App\User $user, array $courseIds){
        $courses = Course::whereIn('id', $courseIds)->get();

        $user->courses()->sync($courses);
    }
}
