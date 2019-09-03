<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use App\Role;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;


class OrderController extends Controller
{
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = (string) Uuid::generate(4);
        });
    }
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
        $request->validate([
            'course_ids' => 'required|array',
            'username' => 'required|string|max:100',
            'email' => 'required|email',
            'phone' => 'required|string|max:12|min:9'
        ]);

        $request->session()->put('username', $request->get('username'));
        $request->session()->put('email', $request->get('email'));

        $user = User::where('email', $request->get('email'))->first();

        if (!$user) {
            $user = new User();
            $user->name = $request->username;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->temp_pass = crypt(time(), rand());
            $user->password = Hash::make($user->temp_pass);
            $user->role()->associate(Role::where('name', 'student')->first());
            $user->save();
        }

        if($user->order) {
            $order = $user->order;
            $order->courses()->detach();
        } else {
            $order = new Order();
            $order->user()->associate($user);
        }

        $order->comment = 'Заказ через сайт: ' . Carbon::now()->format('Y-m-d H:i:s');

        $order->save();
        $order->courses()->attach($request->get('course_ids'));

        $request->session()->forget('items');

        return new JsonResponse(['order_uuid' => $order->uuid ]);
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

    public function edit($id)
    {
        return view('order.create');
    }

    public function success($uuid)
    {
        return view('order.success', [
            'order' => Order::getByUuid($uuid)]);
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
}
