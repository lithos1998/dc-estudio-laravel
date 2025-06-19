<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\Client;
use App\Models\Item;
use App\Models\Tax;
use Illuminate\Http\Request;

class BudgetController extends Controller
{
    public function index(Request $r){
        $query = Budget::query();

        if ($r->has('status') && $r->status != '') {
            $query->where('status', $r->status);
        }

        if ($r->filled('search')) {
            $query->whereHas('client', function ($q) use ($r) {
                $q->where('fantasy_name', 'LIKE', '%' . $r->search . '%');
            });
        }

        if ($r->filled('from_date') && $r->filled('to_date')) {
            $query->whereBetween('created_at', [$r->from_date, $r->to_date]);
        } elseif ($r->filled('from_date')) {
            $query->whereDate('created_at', '>=', $r->from_date);
        } elseif ($r->filled('to_date')) {
            $query->whereDate('created_at', '<=', $r->to_date);
        }

        $query->with(['client', 'item','taxes'])
        ->orderBy('status', 'asc')
        ->orderBy('created_at', 'desc');

        $budgets = $query->get();

        return view('panel.budget.index', compact('budgets'));
    }

    public function create(){
        $clients = Client::select('id', 'fantasy_name')->get();
        $items = Item::select('id', 'name', 'amount')->get();
        $taxes = Tax::select('id', 'name')->get();

        return view('panel.budget.create', compact('clients', 'items', 'taxes'));
    }

    public function edit(String $id){
        $budget = Budget::with(['client', 'item', 'taxes'])->where('id', $id)->get();
        $taxes = Tax::select('id', 'name')->get();

        return view('panel.budget.edit', compact('budget', 'taxes'));
    }

    public function show(String $id){
        $budget = Budget::with(['client', 'item', 'taxes'])->where('id', $id)->get();

        return view('panel.budget.show', compact('budget'));
    }

    public function store(Request $r){
        $data = $r->all();

        try {
            $budget = Budget::create([
                'client_id' => $data['client'],
                'item_id' => $data['item'],
                'status' => 'Pendiente',
                'created_at' => $data['start'],
                'expires_at' => $data['expired'],
                'currency' => $data['currency'],
                'amount' => $data['amount'],
                'discount' => $data['dcto'],
                'observations' => $data['observations']
            ]);

            if (!empty($data['taxes'])) {
                $budget->taxes()->sync($data['taxes']); // O $budget->taxes()->attach($data['taxes']);
            }

            $message = "Cliente creado correctamente.";
            $status = "success";
        } catch (\Throwable $th) {
            $message = "Ocurrio un error.";
            $status = "error";
        }

        return redirect()->route('presupuestos.index')->with($status, $message);    
    }

    public function update(Request $r, String $id){
        $data = $r->all();
        
        $budget = Budget::findOrFail($id);

        $budget->update([
            'expires_at' => $data['expired'],
            'status' => $data['status'],
            'currency' => $data['currency'],
            'amount' => $data['amount'],
            'discount' => $data['dcto'],
            'observations' => $data['observations'],
        ]);


        
        if (!empty($data['taxes'])) {
            $budget->taxes()->sync($data['taxes']);
        } else {
            $budget->taxes()->detach(); 
        }

        return redirect()->route('presupuestos.index')->with('success', 'Cliente creado correctamente.');
    }

    public function changeStatus(Request $r, String $id){
        $budget = Budget::findOrFail($id);

        $budget->update([
            'status' => $r->all()['status']   
        ]);

        return redirect()->back();
    }

    public function destroy(String $id){
        Budget::where('id', $id)->delete();

        return redirect()->route('presupuestos.index')->with('success', 'Cliente creado correctamente.');
    }
}
