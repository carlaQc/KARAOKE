<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Proveedores;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores = DB::table('proveedores')->get();
        //dd($clientes);
        return view ('proveedores.registroProv',compact('proveedores'));
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
    
        'nombre_prov' => 'required',
        'nit_prov' => 'required',
        'celular_prov' => 'required',
        'direccion_prov' => 'required',
        ]);
        //Clientes::create($request->all());
        //return back();

        $data = $request;
        $proveedores = new Proveedores;
        $proveedores->nombre_prov=$data['nombre_prov'];
        $proveedores->nit_prov=$data['nit_prov'];
        $proveedores->celular_prov=$data['celular_prov'];
        $proveedores->direccion_prov=$data['direccion_prov'];

        if($proveedores -> save()){
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
    
        'nombre_prov' => 'required',
        'nit_prov' => 'required',
        'celular_prov' => 'required',
        'direccion_prov' => 'required',
        ]);
        //Clientes::create($request->all());
        //return back();

        $proveedor =Proveedores::findOrFail($request->id_prov);
        $proveedor->update([
        'nombre_prov' => $request['nombre_prov'],
        'nit_prov' => $request['nit_prov'],
        'celular_prov' => $request['celular_prov'],
        'direccion_prov' => $request['direccion_prov'],
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
