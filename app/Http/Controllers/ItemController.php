<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(){
        $items = Item::all();

        return view('panel.items.index', compact('items'));
    }

    public function create(){
        return view('panel.items.create');
    }

    public function store(Request $r){
        $data = $r->all();

        Item::create([
            'name' => $r['name'],
            'amount' => $r['amount']
        ]);

        return redirect()->route('items.index');
    }

    public function edit(String $id){
        $item = Item::findOrFail($id)->get();

        return view('panel.items.edit', compact('item'));
    }

    public function update(Request $r, String $id){
        $data = $r->all();
        $item = Item::findOrFail($id);

        $item->update([
            'name' => $data['name'],
            'amount' => $data['amount']
        ]);

        return redirect()->route('items.index');
    }

    public function destroy(String $id){
        Item::findOrFail($id)->delete();

        return redirect()->route('items.index');
    }
}
