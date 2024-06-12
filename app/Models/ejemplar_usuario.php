<?php

namespace App\Models;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ejemplar_usuario extends Model
{
    use HasFactory;

    public function ejemplars()
    {
       
        return $this->belongsToMany(Ejemplar::class, 'libros_id');
        
    }
    public function usuarios(){
        return $this->belongsToMany(Usuario::class, 'usuarios_id');
    }
   
    
}
