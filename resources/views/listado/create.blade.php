@extends('layouts.plantilla')

@section('title', 'Almacenar Vehículo')

@section('content')
    <div class="container mx-auto p-6 max-w-xl space-y-6">

        <h1 class="text-3xl font-bold text-center text-gray-800">Almacenar un Vehículo</h1>

        <form action="{{ route('listado.index') }}">
            <button type="submit" class="bg-gray-300 text-black px-4 py-2 rounded hover:bg-gray-400 transition">
                ← Volver
            </button>
        </form>

        <form action="{{ route('listado.store') }}" method="POST" class="bg-white p-6 rounded shadow space-y-4">
            @csrf

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Placa:</label>
                <input type="text" name="placa" value="{{ old('placa') }}"
                       class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                @error('placa')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Modelo:</label>
                <input type="text" name="modelo" value="{{ old('modelo') }}"
                       class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                @error('modelo')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Propietario:</label>
                <input type="text" name="propietario" value="{{ old('propietario') }}"
                       class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                @error('propietario')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="text-center pt-4">
                <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">
                    Almacenar
                </button>
            </div>
        </form>
    </div>
@endsection
