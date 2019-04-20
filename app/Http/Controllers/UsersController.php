<?php

namespace App\Http\Controllers;

use App\Mail\UserEnrolled;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
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

    public function enroll(Request $request){

        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'course' => 'required'
        ]);
        $subject = 'Запись на курс с сайта';

        $data = $request->all();
        $to = User::where('email', env('MAIL_TO'))->first();
        if (!$to) {
            $to = User::create(['email' => env('MAIL_TO'), 'name' => 'configured mail receiver', 'password' => 'asdfjkl;']);
        }
        Mail::to($to)->send(new UserEnrolled($data));
        return view('enrolled', ['data' => $data]);
    }
}
