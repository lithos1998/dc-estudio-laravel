<?php

namespace App\Http\Controllers;

use App\Models\Tax;
use Illuminate\Http\Request;

class TaxesController extends Controller
{
    public function index(){
        $taxes = Tax::all();
        return view('panel.taxes.index', compact('taxes'));
    }

    public function create(){
        return view('panel.taxes.create');
    }

    public function store(Request $r){
        $data = $r->all();
        

        Tax::create([
            'name' => $data['name'],
            'amount' => $data['amount']
        ]);

        // ->with($status, $message)
        return redirect()->route('impuestos.index'); 
    }

    public function edit(String $id){
        $tax = Tax::where('id', $id)->get();

        return view('panel.taxes.edit', compact('tax'));
    }

    public function update(Request $r, String $id){
        $data = $r->all();
        $tax = Tax::findOrFail($id);

        $tax->update([
            'name' => $data['name'],
            'amount' => $data['amount']
        ]);

        return redirect()->route('impuestos.index')->with('success', 'Cliente creado correctamente.');
    }

    public function destroy(String $id){
        Tax::where('id', $id)->delete();

        return redirect()->route('impuestos.index')->with('success', 'Impuesto eliminado correctamente.');
    }
}
