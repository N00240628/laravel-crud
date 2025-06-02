@extends('layouts.plantilla')

@section('title', $vehiculo->modelo .' '. $vehiculo->placa)

@section('content')
    <div class="container mx-auto p-6 max-w-xl space-y-6">

        <form action="{{ route('listado.index') }}">
            <button type="submit" class="bg-gray-300 text-black px-4 py-2 rounded hover:bg-gray-400 transition">
                ← Volver
            </button>
        </form>

        <div class="bg-white shadow-md rounded p-6 space-y-2">
            <h2 class="text-2xl font-semibold mb-4 text-gray-800">Detalles del Vehículo</h2>
            <p><span class="font-medium">Nro de orden:</span> {{ $vehiculo->id }}</p>
            <p><span class="font-medium">Placa:</span> {{ $vehiculo->placa }}</p>
            <p><span class="font-medium">Modelo:</span> {{ $vehiculo->modelo }}</p>
            <p><span class="font-medium">Propietario:</span> {{ $vehiculo->propietario }}</p>
            <p><span class="font-medium">Fecha de ingreso:</span> {{ $vehiculo->created_at }}</p>
            <p><span class="font-medium">Última modificación:</span> {{ $vehiculo->updated_at }}</p>
        </div>

        <div class="flex space-x-4">
            <form action="{{ route('listado.edit', $vehiculo) }}">
                <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600 transition">
                    Editar
                </button>
            </form>

            <form action="{{ route('listado.destroy', $vehiculo) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este vehículo?');">
                @csrf
                @method('delete')
                <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition">
                    Eliminar
                </button>
            </form>
        </div>
    </div>
@endsection
