<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Departamento;

class DepartamentoController extends Controller{

    public function index(){
        
        $departamentos = Departamento::get();
        return response()->json($departamentos);
    }

    public function store(){
        
    }
    //     $departamentos = Departamento::where("presupuesto", ">=", 1000)
    //     // ->orderBy('nombre','desc')
    //     // ->take(10)
    //     ->first();
    //     // ->get();
    //     return response()->json($departamentos);
    // }

    // public function index() {
    //     $departamentos = Departamento::where("presupuesto", "<=",
    //     1000)
    //     ->orderBy('nombre','desc')
    //     ->take(10)
    //     ->get();
    //     return response()->json($departamentos);
    //     }

    // public function index() {
    //     $departamento = Departamento::where("presupuesto", 1000)
    //     ->get('nombre');
    //     return response()->json($departamento);
    //     }
        


    
        
}
