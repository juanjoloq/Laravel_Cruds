@extends('layouts.app')
@section('title', 'Editar Categoria')
@section('header', 'Editar Categoria')
@section('content')
<div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md mt-6">
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Editar Categoría</h2>
    <form action="{{ route('categoria.update', $categoria->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-1">Nombre</label>
            <input type="text" name="nombre" value="{{ $categoria->nombre }}"
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"
                required>
        </div>

        <div class="flex justify-between items-center">
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded shadow">
                Actualizar
            </button>
            <a href="{{ route('categoria.index') }}"
                class="text-gray-600 hover:text-red-500 font-medium transition duration-200">
                Cancelar
            </a>
        </div>
    </form>
</div>
@endsection
