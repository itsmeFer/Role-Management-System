<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class AdminController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('admin.index', compact('items'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Item::create($request->all());
        return redirect()->route('admin.index');
    }

    public function edit($id)
    {
        $item = Item::findOrFail($id);
        return view('admin.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $item = Item::findOrFail($id);
        $item->update($request->all());
        return redirect()->route('admin.index');
    }

    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();
        return redirect()->route('admin.index');
    }
}

