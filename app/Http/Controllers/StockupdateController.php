<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StockupdateController extends Controller
{
    public function get()
    {
        return view('stockUpdate.stock_update');
    }
}
