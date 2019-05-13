<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Clientes;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = DB::table('clientes')->get();
        //dd($clientes);
        return view ('cliente.registro',compact('clientes'));
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
    
        'nombre_cli' => 'required',
        'ci_cli' => 'required',
        'paterno_cli' => 'required',
        'materno_cli' => 'required',
        'celular_cli' => 'required',
        ]);
        //Clientes::create($request->all());
        //return back();

        $data = $request;
        $cliente = new Clientes;
        $cliente->nombre_cli=$data['nombre_cli'];
        $cliente->ci_cli=$data['ci_cli'];
        $cliente->paterno_cli=$data['paterno_cli'];
        $cliente->materno_cli=$data['materno_cli'];
        $cliente->celular_cli=$data['celular_cli'];
        $cliente->genero_cli=$data['genero_cli'];

        if($cliente -> save()){
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
    public function update(Request $request)
    {
        $this->validate($request,[
    
        'nombre_cli' => 'required',
        'ci_cli' => 'required',
        'paterno_cli' => 'required',
        'materno_cli' => 'required',
        'celular_cli' => 'required',
        ]);
        //Clientes::create($request->all());
        //return back();

        $cliente =Clientes::findOrFail($request->id_cli);
        $cliente->update([
        'nombre_cli' => $request['nombre_cli'],
        'ci_cli' => $request['ci_cli'],
        'paterno_cli' => $request['paterno_cli'],
        'materno_cli' => $request['materno_cli'],
        'celular_cli' => $request['celular_cli'],
        'genero_cli' => $request['genero_cli'],
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
