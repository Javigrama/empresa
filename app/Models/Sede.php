<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sede extends Model {
    // use HasFactory;
    
    public $timestamps = false;

    protected $fillable=['nombre', 'direccion'];
    
    public function departamentos(){
        return $this-> hasMany(Departamento::class);
        // return $this->hasMany(Departamento::class,'nombre_clave_foranea');
        // return $this->hasMany(Departamento::class,'nombre_clave_foranea', 'nombre_clave_primaria_local');
    }



}
