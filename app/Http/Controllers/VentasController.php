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


class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
            $fecha = carbon::now()->format('Y-m-d');
            //$fecha = carbon::parse($fecha);
            //dd($fecha);
    
          $pyps = DB::table('productos')->join('precios','productos.id_prec','=','precios.id_prec')->select('productos.nombre_prod','precios.cunitario_prec')->get();
        $listProds = DB::table('Productos')->select('nombre_prod','id_prod')->where('estado_prod','=','a')->get();
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
         $ventas = DB::table('inventarios')
         ->where('accion_inv','=',$v)
         ->whereDate('f_inv','=',$fecha)
         ->get();
         $st=0;
         $in=0;
         $en=0;
        return view('ventas.registroVentas',compact('st','in','en','ventas','clientes','nregs','pyps','cprod','cantProd','precProd','pprod','namProd','nprod','listProds'));
    
    }
    public function filtroDeProducto(Request $request){
        /*
        $suma = DB::table('inventarios')
        ->where('nombre_inv','=','golosinas')
        ->select(DB::raw('SUM(sal_inv) as salidas'))
        ->get();

        dd($suma);
*/
        $fecha = carbon::now()->format('Y-m-d');

        $idProdAbuscar = $request->nproducto;
        $fecha_inicio=$request->fecha_inicio;
        $fecha_final=$request->fecha_final;
        if((is_null($fecha_inicio))&&(is_null($fecha_final))){
            
                    $ventas = DB::table('inventarios')
                    ->where('nombre_inv','=',$idProdAbuscar)
                    ->where('accion_inv','=','v')
                    ->whereDate('f_inv','=',$fecha)
                    ->get();            
        }else{  
                    $fecha_inicio = carbon::parse($request->fecha_inicio);
                    $fecha_final = carbon::parse($request->fecha_final);
                    $ventas = DB::table('inventarios')
                    ->where('nombre_inv','=',$idProdAbuscar)
                    ->where('accion_inv','=','v')
                    ->whereBetween('f_inv',[$fecha_inicio,$fecha_final])
                    ->get();
        }


        $pyps = DB::table('productos')
        ->join('precios','productos.id_prec','=','precios.id_prec')
        ->select('productos.nombre_prod','precios.cunitario_prec')
        ->get();
        $listProds = DB::table('Productos')->select('nombre_prod','id_prod')->where('estado_prod','=','a')->get();
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
        $st=0;
        $in=0;
        $en=0;
         //$ventas = DB::table('inventarios')->where('accion_inv','=',$v)->get();
        return view('ventas.registroVentas',compact('st','in','en','sumador','ventas','clientes','nregs','pyps','cprod','cantProd','precProd','pprod','namProd','nprod','listProds'));

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
                $stats = DB::table("inventarios")->select('stock_inv','ing_inv')->where("nombre_inv", "=", $namm)->orderby('created_at','DESC')->get();
                $eee = $stats[0];
                $cant_ingresa=$eee->ing_inv;
                $cant_stock=$eee->stock_inv;
                $cantInvTot = $cant_ingresa + $cant_stock;
                $stock_actual=$cantInvTot-$cantt;
                //dd($cantInvTot);
                if ($cantInvTot<= $cantt) {
                    //dd("la cantidad del inventario es baja");
                }else{

                    $fecha = carbon::now();

                    $data = $request;
                    $orden = new Inventarios;
                    $orden->nombre_inv=$namm;
                    $orden->accion_inv='v';
                    $orden->stock_inv=$stock_actual;
                    $orden->ing_inv=0;
                    $orden->sal_inv=$cantt;
                    $orden->f_inv=$fecha;
                    $orden->estado_inv='a';

                    $orden -> save();
                    
                }
            }
            $cprod=$cprod-1;
        }





        $fecha = carbon::now()->format('Y-m-d');
            //$fecha = carbon::parse($fecha);
            //dd($fecha);
    
        $pyps = DB::table('productos')->join('precios','productos.id_prec','=','precios.id_prec')->select('productos.nombre_prod','precios.cunitario_prec')->get();
        $listProds = DB::table('Productos')->select('nombre_prod','id_prod')->where('estado_prod','=','a')->get();
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
         $ventas = DB::table('inventarios')
         ->where('accion_inv','=',$v)
         ->whereDate('f_inv','=',$fecha)
         ->get();
        return view('ventas.registroVentas',compact('ventas','clientes','nregs','pyps','cprod','cantProd','precProd','pprod','namProd','nprod','listProds'));
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
