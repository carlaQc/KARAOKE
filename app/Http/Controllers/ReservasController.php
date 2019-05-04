<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

use \App\tipos_de_ambiente;


class ReservasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        
        return view('Reservas.index');
    }

    public function RegistrosTiposReservas()
    {

//       $tipos_de_ambiente = tipos_de_ambiente::all();        
        return view('Reservas.RegistrarTiposDeReservas');
    }
    public function store(Request $request)
    {
        
        tipos_de_ambiente::create($request->all());

        return back();  
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
}
