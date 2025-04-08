@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto mt-10 px-4">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-bold text-gray-800 text-white">Lista de Productos</h2>
        <a href="{{ route('productos.create') }}"
            class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md transition duration-200">
            Registrar Nuevo Producto
        </a>
    </div>

    <div class="bg-white border border-gray-300 rounded-lg overflow-hidden shadow-sm">
        <table class="w-full text-sm text-left text-gray-700">
            <thead class="bg-gray-100 border-b border-gray-300">
                <tr>
                    <th class="px-4 py-2 border-r">Nombre</th>
                    <th class="px-4 py-2 border-r">Cantidad</th>
                    <th class="px-4 py-2 border-r">Categoría</th>
                    <th class="px-4 py-2 border-r">Precio</th>
                    <th class="px-4 py-2 ">Operaciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $producto)
                <tr class="hover:bg-gray-50 border-b border-gray-200">
                    <td class="px-4 py-2 border-r">{{ $producto->nombre }}</td>
                    <td class="px-4 py-2 border-r">{{ $producto->cantidad }}</td>
                    <td class="px-4 py-2 border-r">{{ $producto->categoria->nombre ?? 'Sin categoría' }}</td>
                    <td class="px-4 py-2 border-r">${{ number_format($producto->precio, 2) }}</td>
                    <td>
                        <a href="{{ route('productos.edit', $producto->id) }}"
                            class="bg-yellow-400 hover:bg-yellow-500 text-white font-semibold py-1 px-3 rounded text-sm shadow">
                            Editar
                        </a>

                        <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" class="inline-block" onsubmit="return confirm('¿Estás seguro de eliminar este producto?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="bg-red-500 hover:bg-red-600 text-white font-semibold py-1 px-3 ml-2 rounded text-sm shadow">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection