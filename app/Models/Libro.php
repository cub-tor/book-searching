<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    //table, nombre de la tabla de la base de datos a la que me quiero conectar. 
    protected $table= 'libro';
    //protected $filaLibro = ['titulo', 'fecha'];
}
