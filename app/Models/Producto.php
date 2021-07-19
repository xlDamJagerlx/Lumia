<?php

namespace App\Models; 

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = [
        'CODICE_PR',
        'NOMBRE_PR',
        'DESCIPCION_PR',
        'PRECIO_PR',
        'STOCK_PR',
        'FOTO_PR'
    ];
}
