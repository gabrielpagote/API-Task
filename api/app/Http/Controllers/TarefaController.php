<?php

namespace App\Http\Controllers;
use App\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function index()
    {
       return Tarefa::all();
    }
    
    public function store(Request $request)
    {
        echo $request->get("titulo");

        return response()->json(
         Tarefa::create(["titulo" =>$request->titulo]), 
         201
        );
    }
}