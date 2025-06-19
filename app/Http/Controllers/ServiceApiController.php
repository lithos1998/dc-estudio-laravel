<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class ServiceApiController extends Controller
{
    public function index(){
        try{
            // return the services in json format
            $services = Service::all();

            if ($services->isEmpty()) {
                throw new ModelNotFoundException();
            }
    
            return response()->json($services, 200);
        }catch (ModelNotFoundException $e){
            return response()->json(['error' => 'No se encontraron los servicios'], 404);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Ocurrió un error inesperado'], 500);
        }
    }

    public function main_services(){
        // main services    
        $idNames = ['ley_257', 'puesta_a_tierra', 'subdivision', 'avisos_obra', 'solicitud_planos', 'informe_dominio', 'fachadas', 'municipales', 'planos_evacuacion'];

        try{
            // select
            $mainServices = Service::whereIn('id_name', $idNames)->get();

            if ($mainServices->isEmpty()) {
                throw new ModelNotFoundException();
            }

            return response()->json($mainServices, 200);
        }catch (ModelNotFoundException $e){
            return response()->json(['error' => 'No se encontraron los servicios principales'], 404);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Ocurrió un error inesperado'], 500);
        }
    }

    public function shared_services(){
        try{
            // return the services (only icons and titles) in json format
            $services = Service::select('name', 'icon')->get();

            if ($services->isEmpty()) {
                throw new ModelNotFoundException();
            }
    
            return response()->json($services, 200);
        }catch (ModelNotFoundException $e){
            return response()->json(['error' => 'No se encontraron los servicios'], 404);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Ocurrió un error inesperado'], 500);
        }
    }
}




