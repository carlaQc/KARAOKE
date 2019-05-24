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
use Carbon\carbon;
use App\Inventarios;
use App\Ordenes;
class ListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ordenes = DB::table('ordenes')->join('nuevos_registros','ordenes.id_nuevo','=','nuevos_registros.id_nuevo')->where('ordenes.estado','=','a')->get();

       
        //dd($clientes);
       // return view ('cliente.registro',compact('clientes'))

        return view('OrdenMaestro.listOrden',compact('ordenes'));
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
        $cprod = productos::count();
        $a = $request->id_nuevo;
        $nn = $request->nombre_cli;

         $dorden = DB::table('ordenes')->join('nuevos_registros','ordenes.id_nuevo','=','nuevos_registros.id_nuevo')->where('ordenes.id_nuevo','=',$a)->get();

        foreach ($dorden as $dorde) {
            $id = $dorde->id_orden;
            $product = $dorde->producto;
            $preci = $dorde->precio;
            $cantida = $dorde->cantidad;
            $ctota = $dorde->ctotal;
            //con esta parte obtenemos los datos del producto del inventario (cantidades)
            $stats = DB::table("inventarios")->select('stock_inv','ing_inv')->where("nombre_inv", "=", $product)->orderby('created_at','DESC')->get();
                $eee = $stats[0];
                $cant_ingresa=$eee->ing_inv;
                $cant_stock=$eee->stock_inv;
                $cantInvTot = $cant_ingresa + $cant_stock;

                $stockk = $cantInvTot - $cantida;

                $fecha = carbon::now();

                $inventario = new inventarios;
                $inventario->nombre_inv=$product;
                $inventario->accion_inv='v';
                $inventario->stock_inv=$stockk;
                $inventario->ing_inv=0;
                $inventario->sal_inv=$cantida;
                $inventario->f_inv=$fecha;
                $inventario-> save();

                $delet = Ordenes::findOrFail($id);
                $delet->update([
                    'estado' => 'b',
                ]);
        }
        $inventarios = DB::table('inventarios')->get();
        return view('inventario.inventario',compact('inventarios'));

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
