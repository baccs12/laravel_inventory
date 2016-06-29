<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Supplier;

class SupplierController extends Controller
{

    public function create()
    {
        return view('supplier.create');
    }

    public function get(Supplier $supplier)
    {
        return view('supplier.supplier', [
            'supplier' => $supplier->all()
        ]);
    }

    public function post(Request $request, Supplier $supplier)
    {
        $supplier->create($request->all());
        // save to database

        return redirect('/supplier');
    }




}
