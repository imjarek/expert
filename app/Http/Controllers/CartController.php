<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class CartController extends Controller
{
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function add()
    {
        $this->request->validate(['itemId' => 'required:integer']);
        $this->request->session()->push('items', $this->request->get('itemId'));
        return new JsonResponse(['success' => true]);
    }

    public function all()
    {
        return $this->request->session()->get('items');
    }

    public function show()
    {
        $username = session('username');
        $email = session('email');

        $ids = $this->all();
        $items = !empty($ids) ? Course::whereIn('id', $ids)->get() : collect();
        return view('cart', ['items' => $items, 'email' => $email, 'username' => $username]);
    }
}
