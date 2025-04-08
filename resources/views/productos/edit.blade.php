@extends('layouts.app')

@section('title', 'Editar Producto')
@section('header', 'Editar Producto')

@section('content')
<div class="max-w-2xl mx-auto mt-8 p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Editar Producto</h2>

    <form action="{{ route('productos.update', $producto->id) }}" method="POST" class="space-y-5">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-gray-700 font-medium mb-1">Nombre</label>
            <input type="text" name="nombre" value="{{ $producto->nombre }}"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-blue-300" required>
        </div>

        <div>
            <label class="block text-gray-700 font-medium mb-1">Cantidad</label>
            <input type="number" name="cantidad" value="{{ $producto->cantidad }}"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-blue-300" required>
        </div>

        <div class="mb-3">
            <label class="block text-gray-700 font-medium mb-1">Categoría</label>
            <select name="categoria_id" required
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-blue-300">
                <option value="">Selecciona una categoría</option>
                @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}" {{ (isset($producto) && $producto->categoria_id == $categoria->id) ? 'selected' : '' }}>
                    {{ $categoria->nombre }}
                </option>
                @endforeach
            </select>
        </div>


        <div>
            <label class="block text-gray-700 font-medium mb-1">Precio</label>
            <input type="number" name="precio" value="{{ $producto->precio }}" step="0.01"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-blue-300" required>
        </div>

        <div class="flex items-center justify-between pt-4">
            <button type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded shadow">
                Actualizar
            </button>
            <a href="{{ route('productos.index') }}"
                class="text-gray-600 hover:text-gray-800 underline">
                Cancelar
            </a>
        </div>
    </form>
</div>
@endsection