@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto mt-10 p-6 bg-white rounded-2xl shadow-md">
    <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Registrar Producto</h2>
    <form action="{{ route('productos.store') }}" method="POST" class="space-y-5">
        @csrf
        <div>
            <label class="block text-sm font-medium text-gray-700">Nombre</label>
            <input type="text" name="nombre" required class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Cantidad</label>
            <input type="number" name="cantidad" required class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
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
            <label class="block text-sm font-medium text-gray-700">Precio</label>
            <input type="number" name="precio" step="0.01" required class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="text-center">
            <button type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded-lg transition duration-200">
                Guardar
            </button>
            <a href="{{ route('productos.index') }}"
                class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md transition duration-200">
                Listado de productos
            </a>
        </div>
    </form>
</div>
@endsection