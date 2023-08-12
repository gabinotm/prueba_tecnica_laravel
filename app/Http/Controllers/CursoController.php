<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return"bienvenidos al curso";
    }
    public function create(){
        return"En est apagina podras crear un curso";  
    }
    public function show($cursos){
        return"Bienvenidos al curso: $cursos";
    }
}
