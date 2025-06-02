<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVehiculo;
use App\Models\Vehiculo;
use Illuminate\Http\Request;

class ListadoController extends Controller
{
    public function index(){

        $vehiculos = Vehiculo::paginate();

        return view('listado.index', compact('vehiculos'));
    }

    public function create(){
        return view('listado.create');
    }

    public function store(StoreVehiculo $request)
    {
        $vehiculo = new Vehiculo();
        $vehiculo->placa = strtoupper($request->placa);
        $vehiculo->modelo = strtoupper($request->modelo);
        $vehiculo->propietario = strtoupper($request->propietario);
        $vehiculo->save();

        return redirect()->route('listado.index');
    }


    public function show(Vehiculo $vehiculo){
        return view('listado.show', compact('vehiculo'));
    }

    public function edit(Vehiculo $vehiculo){
        return view('listado.edit', compact('vehiculo'));
    }

    public function update(Request $request ,Vehiculo $vehiculo)
    {   
        $request->validate([
        'placa' => 'required|string|unique:vehiculos,placa,' . $vehiculo->id,
        'modelo' => 'required|string',
        'propietario' => 'required|string',
        ]);

        $vehiculo->placa = strtoupper($request->placa);
        $vehiculo->modelo = strtoupper($request->modelo);
        $vehiculo->propietario = strtoupper($request->propietario);
        $vehiculo->save();

        return redirect()->route('listado.show', $vehiculo);
    }

    public function destroy(Vehiculo $vehiculo){
        $vehiculo->delete();

        return redirect()->route('listado.index');
    }
}
