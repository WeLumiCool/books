<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BasketController extends Controller
{
    public function index()
    {
        //Получаем сессии, для корзины
        $books = Session::get('cart');
        return response()->json(['books' => $books]);
    }

    public function change_basket(Request $request)
    {

    }
}
