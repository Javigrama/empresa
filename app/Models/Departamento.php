<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model{
    // use HasFactory;

    public function sede(){
        return $this->belongsTo(Sede::class);
        // return $this->belongsTo(Sede::class, 'nombre_clave_foranea', 'nombre_clave_otra_tabla');

    }

    public function empleados(){
        return $this-> hasMany(Empleado::class);
    }

}
