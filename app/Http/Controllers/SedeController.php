<?php

namespace App\Http\Controllers;
use App\Models\Sede;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Illuminate\Support\Facades\DB;


class SedeController extends Controller{

    public function listarSedes(){
        $sedes = Sede::get();
        return response()->json($sedes);
    }

    public function index() {
        $sedes = Sede::all();
        return response()->json($sedes);
    }

    // public function store(Request $request){

    //     $sede = new Sede;
    //     $sede -> nombre = $request->nombre;
    //     $sede -> direccion  = $request->direccion;
    //     $sede -> save();

    // }

    public function store(Request $request){

        $sede = Sede::create(['nombre' => $request->nombre,
        'direccion' => $request->direccion]);
    }
    
    // Si ya tenemos una instancia de la podemos usar fill

    public function storeFill(Request $request){
        $sede = new Sede; //nueva instancia del modelo para poder usar eloquent
        $sede->fill(['nombre'=> $request->nombre, 'direccion' => $request->direccion]);
        $sede -> save();
    }

    public function dame(Request $request){

        $sede = DB::table('sedes')->find($request->id);
        return response()->json($sede);
    } 



   

    
    // $departamentos_de_una_sede = Sede::find(1)->departamentos;
    //  $sedes = Sede::with('departamentos')->get();
}
