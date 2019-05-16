<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\tipos_de_ambiente;


class TiposDeAmbienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $tipos_de_ambiente = DB::table('tipos_de_ambiente')->get();        
        return view('Reservas.RegistrarTiposDeReservas',compact('tipos_de_ambiente'));
        }

    public function store(Request $request)
    {
        //dd($request->all());
        
        tipos_de_ambiente::create($request->all());
        return back();  
    }
    public function update(Request $request)
    {
        
        //dd($request->all());
       $tipos_de_ambiente = tipos_de_ambiente::findOrFail($request->tipos_de_ambiente_id);

        $tipos_de_ambiente->update($request->all());
    
       
        return back();
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
}
