<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use DB;
use Illuminate\Support\Facades\DB as FacadesDB;
use App\Models\Libro;

class formularioControlador extends Controller
{
    //Realizo la consulta a la base de datos
   public function listaLibros()
    {
        $libros = Libro::all();
        return view('tablaVista', ['libros' => $libros]);
    }

    //Muestra el formulario
    public function buscar_libros()
    {
        return view('buscarVista');
    }
    
    //Devuelve un json con los libros de la base de datos    
    /**
     * consultar_libros
     *
     * @param  mixed $request
     * @return void JSON
     */
    public function consultar_libros(Request $request)
    {   //$request es el objeto HTTP Request

        $valor = $request->input('texto');        
        $libros = Libro::where('titulo', 'like', "%$valor%")->get();
        return response()->json($libros, 200);
    }
    
    /**
     * mostrar_formulario_consulta
     *
     * @return void buscarVista.blade.php
     */
    public function mostrar_formulario_consulta()
    {
        return view('buscarVista');
    }
   
    
}

/*
public function consultar_libros(Request $request)
    {
        $valor = $request->q;
        $libros = Libro::where('titulo', 'like', "%$valor%")->get();
        return response()->json($libros, 200);
    }
    */
?>