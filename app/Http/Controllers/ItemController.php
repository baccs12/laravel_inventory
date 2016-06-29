<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function create()
    {
        return view('item.create');
    }

    public function get(Item $item)
    {
        return view('item.item', [
            'items' => $item->all()
        ]);
    }

    public function post(Request $request, Item $item)
    {
        $item->create($request->all());
        // save to database

        return redirect('/item');
    }


    public function edit(Item $item)
    {
        $item = $item->get();
        return view('item.edit', compact('item'));

    }

    // public function update(Request $request, Item $item)
    // {
    //     $item->update($request->all());
    //     return redirect('/item');
    // }


}
