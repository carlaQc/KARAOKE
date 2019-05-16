<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Precios;

class PrecioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $precios = DB::table('precios')->get();
        //dd($clientes);
        return view ('precios.registroPrec',compact('precios'));
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
    
        'cpaquete_prec' => 'required',
        'cunitario_prec' => 'required',
        ]);
        //Clientes::create($request->all());
        //return back();

        $data = $request;
        $precios = new Precios;
        $precios->cpaquete_prec=$data['cpaquete_prec'];
        $precios->cunitario_prec=$data['cunitario_prec'];

        if($precios -> save()){
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
    
        'cpaquete_prec' => 'required',
        'cunitario_prec' => 'required',

        ]);
        //Clientes::create($request->all());
        //return back();

        $precio =Precios::findOrFail($request->id_prec);
        $precio->update([
        'cpaquete_prec' => $request['cpaquete_prec'],
        'cunitario_prec' => $request['cunitario_prec'],
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
