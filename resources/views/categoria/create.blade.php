@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Registrar Nueva Categoría</h2>

    <form action="{{ route('categoria.store') }}" method="POST" class="space-y-5">
        @csrf

        <div>
            <label class="block text-gray-700 font-medium mb-1">Nombre</label>
            <input type="text" name="nombre"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                required>
        </div>

        <div class="flex justify-between pt-4">
            <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded shadow">
                Guardar
            </button>
            <a href="{{ route('categoria.index') }}"
            class="text-gray-600 hover:text-gray-800 underline">
                Cancelar
            </a>
        </div>
    </form>
</div>
@endsection
