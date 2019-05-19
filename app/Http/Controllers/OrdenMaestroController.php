<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Clientes;
use App\Productos;
use App\Proveedores;
use App\Precios;
use App\OrdenMaestro;

use App\User;

class OrdenMaestroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $User = DB::table('users')->get();
        $clientes = DB::table('clientes')->get();
        $precios = DB::table('precios')->get();
         $proveedores = DB::table('proveedores')->get();
       
        $productos = DB::table('productos')->get();
        $NuevoRegistro =DB::table('nuevos_registros')->get();
       
        //dd($clientes);
       // return view ('cliente.registro',compact('clientes'))

        return view('OrdenMaestro.OrdenMaestro',compact('clientes','proveedores','precios','productos','User','NuevoRegistro'));


        }

    public function store(Request $request)

    {


        //dd($request->all());
            OrdenMaestro::create($request->all());
            return back();  

    }
    public function update(Request $request)
    {
        
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
}
