<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $clients = Client::orderBy('fantasy_name', 'asc')->get();

        return view("panel.clients.index", compact('clients'));
    }

    public function create(){
       return view('panel.clients.create');
    }

    public function show(String $id){
        $client =  Client::with(['budgets.taxes'])->findOrFail($id);

        return view('panel.clients.show', compact('client'));
    }

    public function store(Request $request){
        $data = $request->all();
        try {
            Client::create([
                'name' => $data['name'],
                'lastname' => $data['lastname'],
                'fantasy_name' => $data['fantasy'],
                'cuit' => $data['cuit'],
                'category' => $data['category'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'cel_phone' => $data['cellphone'],
                'address' => $data['address']
            ]);

            $message = "Cliente creado correctamente.";
            $status = "success";
        } catch (\Throwable $th) {
            $message = "Ocurrio un error.";
            $status = "error";
        }

        return redirect()->route('clientes.index')->with($status, $message);
    }

    public function edit(String $id){
        $client = Client::where('id', $id)->get();

        return view('panel.clients.edit', compact('client'));
    }

    public function update(Request $request, String $id){
        $data = $request->all();

        Client::where('id',$id)->update([
            'name' => $data['name'],
            'lastname' => $data['lastname'],
            'fantasy_name' => $data['fantasy'],
            'cuit' => $data['cuit'],
            'category' => $data['category'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'cel_phone' => $data['cellphone'],
            'address' => $data['address']
        ]);
        
        return redirect()->route('clientes.index')->with('success', 'Cliente editado correctamente.');
    }

    public function destroy(String $id){
        Client::where('id', $id)->delete();

        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado correctamente.');
    }
}
