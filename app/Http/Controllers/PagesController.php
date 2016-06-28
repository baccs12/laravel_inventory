<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function view()
    {
        return view('item');
    }

    public function supply()
    {
        return view('supplier');
    }

    public function update()
    {
        return view('update');
    }

    public function account()
    {
        return view('user');
    }

}
