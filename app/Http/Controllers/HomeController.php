<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index()
    {
        if (request()->getHost() === 'admin.estudiodovalle.com' || request()->getHost() === 'admin.localhost') {
            // return Redirect::to(request()->getHost().'/panel');
        }
        
        // main services
        $idNames = ['ley_257', 'puesta_a_tierra', 'subdivision', 'avisos_obra', 'solicitud_planos', 'informe_dominio', 'fachadas', 'municipales', 'planos_evacuacion'];
        
        // select
        $data = Service::whereIn('id_name', $idNames)->get();
        
        return view('home.index', compact('data'));
    }
}
