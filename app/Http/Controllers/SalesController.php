<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\Cuote;
use App\Models\Sale;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index(){
        $sales = Sale::with(['budget.client', 'budget.item', 'user', 'cuotes'])->get();

        return view('panel.sales.index', compact('sales'));
    }

    public function create(Request $r){
        $sale = Budget::with(['client', 'item', 'taxes'])->where('id', $r['id'])->get();
        $users = User::where('privileges', 'facturador')->get();

        return view('panel.sales.create', compact('sale', 'users'));
    }

    public function store(Request $r){
        $data = $r->all();

        // return $data;

        
        
        // number = la ultima se trae de afip
        
        // try {


            $sale = Sale::create([
                'budget_id' => $data['budget'],
                'user_id' => $data['facturador'],
                'number' => '12',
                'type' => 'c',
                'status' => 'pendiente',
                'created_at' => $data['start'],
                'expires_at' => $data['expired'],
            ]);

            $budget = Budget::findOrFail($data['budget']);

            $budget->update([
                'status' => 'facturado',
             ]);

            $startDate = Carbon::parse($data['start']);
            

            for ($i=1; $i <= $data['cuotes'] ; $i++) { 
                $date = $startDate->copy()->addMonths($i)->startOfMonth();

                Cuote::create([
                    'sale_id' => $sale['id'],
                    'number' => $i,
                    'amount' => 20000,
                    'status' => 'pendiente',
                    'expires_at' => $date->format('m/Y'),
                ]);
            }

            $message = "Cliente creado correctamente.";
            $status = "success";
        // } catch (\Throwable $th) {
        //     $message = "Ocurrio un error.";
        //     $status = "error";
        // }

        return redirect()->route('ventas.index')->with($status, $message);  
    }
}
