<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Productos;
use App\Proveedores;
use App\Precios;
use App\tipo_de_producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores = DB::table('proveedores')->get();
        $precios = DB::table('precios')->get();
        $productos = DB::table('productos')->get();
        $tproductos = DB::table('tipo_de_productos')->get();
        //dd($clientes);
        return view ('Productos.registroProd',compact('proveedores','precios','productos','tproductos'));
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
        $this->validate($request,[
    
        'nombre_prod' => 'required',
        'cant_prod' => 'required',
        'fing_prod' => 'required',
        'fven_prod' => 'required',
        'id_prec' => 'required',
        'id_prov' => 'required',
        'id_tprod' => 'required',
        ]);
        //Clientes::create($request->all());
        //return back();

        $data = $request;
        $productos = new Productos;
        $productos->nombre_prod=$data['nombre_prod'];
        $productos->cant_prod=$data['cant_prod'];
        $productos->fing_prod=$data['fing_prod'];
        $productos->fven_prod=$data['fven_prod'];
        $productos->id_prec=$data['id_prec'];
        $productos->id_prov=$data['id_prov'];
        $productos->id_tprod=$data['id_tprod'];

        if($productos -> save()){
            return back();
        }else{
            //return "no se ha registrado correctamente el usuario";
            
        }
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
        $this->validate($request,[
    
        'nombre_prod' => 'required',
        'cant_prod' => 'required',
        'fing_prod' => 'required',
        'fven_prod' => 'required',
        'id_prec' => 'required',
        'id_prod' => 'required',
        ]);
        //Clientes::create($request->all());
        //return back();

        $productos =Productos::findOrFail($request->id_prod);
        $productos->update([
        'nombre_prod' => $request['nombre_prod'],
        'cant_prod' => $request['cant_prod'],
        'fing_prod' => $request['fing_prod'],
        'fven_prod' => $request['fven_prod'],
        'id_prec' => $request['id_prec'],
        'id_prov' => $request['id_prov'],
        ]);
       
        //dd($id);
        //dd($request->all());
        return back();
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
