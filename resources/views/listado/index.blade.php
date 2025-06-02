@extends('layouts.plantilla')

@section('title', 'Listado')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold text-center mb-6">Bienvenido a la página del almacén de vehículos</h1>

        <form action="{{ route('listado.create') }}" class="mb-6 text-center">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                Almacenar nuevo vehículo
            </button>
        </form>

        <ul class="space-y-4">
            @foreach ($vehiculos as $vehiculo)
                <li class="border p-4 rounded shadow hover:bg-gray-100 transition">
                    <a href="{{ route('listado.show', $vehiculo->id) }}" class="block text-lg font-medium text-blue-700 hover:underline">
                        Vehículo: {{ $vehiculo->modelo }}
                        <br>
                        <span class="text-sm text-gray-600">Placa: {{ $vehiculo->placa }}</span>
                    </a>
                </li>
            @endforeach
        </ul>

        <div class="mt-6">
            {{ $vehiculos->links() }}
        </div>
    </div>
@endsection
