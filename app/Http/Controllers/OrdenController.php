<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Productos;
use App\Precios;
use Carbon\carbon;
use App\Inventarios;
use App\Ordenes;
class OrdenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        cantidad de unidades por producto = "cantt";
        nombre del producto = "namm";
        precio unitario del producto = "precc";

        ejemplo de consulta para sumar dos columnas
        $stats = DB::table("users_stats")
->select(DB::raw("logins_sun + logins_mon"))
->where("id", "=", "7");

     */
    public function store(Request $request)
    {

        $cprod = productos::count();

        while ($cprod >= 1) {
            $cantt="cantt";
            $namm="namm";
            $precc="precc";
            $kcantt =$cantt.$cprod;
            $knamm =$namm.$cprod;
            $kprecc =$precc.$cprod;
            $cantt = $request->$kcantt;
            $namm = $request->$knamm;
            $precc = $request->$kprecc;  
            if ($cantt == null) {
                //dd("se esta desvordando por aqui null");
            }else{
                $stats = DB::table("inventarios")->select('stock_inv','ing_inv')->where("nombre_inv", "=", $namm)->get();
                $eee = $stats[0];
                $cant_ingresa=$eee->ing_inv;
                $cant_stock=$eee->stock_inv;
                $cantInvTot = $cant_ingresa + $cant_stock;
                //dd($cantInvTot);
                if ($cantInvTot<= $cantt) {
                    //dd("la cantidad del inventario es baja");
                }else{
                    $data = $request;
                    $orden = new Ordenes;
                    $orden->producto=$namm;
                    $orden->precio=$precc;
                    $orden->cantidad=$cantt;
                    $orden->ctotal=$precc*$cantt;
                    $orden->id_nuevo=$data['id_nuevo'];

                    $orden -> save();
                    
                }
            }
            $cprod=$cprod-1;
        }
        return back();
        
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
