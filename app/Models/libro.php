<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class libro extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'editorial', 'paginas'];

    public function ejemplares()
    {
        return $this->hasMany(Ejemplar::class, 'libros_id');
    }
   
}
