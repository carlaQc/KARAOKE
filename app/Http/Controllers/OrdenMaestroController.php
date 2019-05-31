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

        /*$prodyprec =DB::table('articles') ->join('categories', 'articles.id', '=', 'categories.id') ->join('users', 'users.id', '=', 'articles.user_id') ->select('articles.id','articles.title','articles.body','users.username', 'category.name') ->get();

        ->where('productos.id_prec','=','precios.id_prec')

        */
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
       
        //dd($clientes);
       // return view ('cliente.registro',compact('clientes'))

        return view('OrdenMaestro.OrdenMaestro',compact('clientes','nregs','pyps','cprod','cantProd','precProd','pprod','namProd','nprod'));

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
