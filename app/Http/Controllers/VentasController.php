<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Productos;


class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
          $pyps = DB::table('productos')->join('precios','productos.id_prec','=','precios.id_prec')->select('productos.nombre_prod','precios.cunitario_prec')->get();

        $cprod = productos::count();
        $cprod = $cprod + 1;
        $pprod = $cprod;
        $nprod = $cprod;
        //dd($cprod);
        $cantProd = "cantt";
        $namProd = "namm";
        $precProd = "precc";
        $clientes = DB::table('clientes')->get();
        $nregs =DB::table('nuevos_registros')->get();
       
        $v="v";
         $ventas = DB::table('inventarios')->where('accion_inv','=',$v)->get();
        return view('ventas.registroVentas',compact('ventas','clientes','nregs','pyps','cprod','cantProd','precProd','pprod','namProd','nprod'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
