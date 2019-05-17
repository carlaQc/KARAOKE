<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\tipo_de_producto;

class tipoDeProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $tProductos = DB::table('tipo_de_productos')->get();
        //dd($clientes);
        return view ('tipoProducto.tipoProd',compact('tProductos'));
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
        //dd($request);
        
        $this->validate($request,[
    
        'marca_tprod' => 'required',
        'desc_tprod' => 'required',
        ]);
        //Clientes::create($request->all());
        //return back();


        $data = $request;
        $tprod = new tipo_de_producto;
        $preparable = $data['prep_tprod'];
        if ($preparable == 1){
            $tprod->marca_tprod=$data['marca_tprod'];
            $tprod->prep_tprod=$data['prep_tprod'];
            $tprod->desc_tprod=$data['desc_tprod'];
        }else{
            $tprod->marca_tprod=$data['marca_tprod'];
            $tprod->prep_tprod=0;
            $tprod->desc_tprod=$data['desc_tprod'];    
        }
        

        if($tprod -> save()){
            return back();
        }else{
            //return "no se ha registrado correctamente el usuario";
            return view('myRegistroCliente');
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
