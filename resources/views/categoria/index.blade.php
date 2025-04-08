@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto mt-8 p-6 bg-white rounded-lg shadow-md">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Lista de Categorías</h2>
        <a href="{{ route('categoria.create') }}"
            class="bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded shadow">
            Registrar Nueva Categoría
        </a>
    </div>

    <table class="min-w-full border border-gray-300 rounded overflow-hidden">
        <thead class="bg-gray-100 text-left text-gray-600 text-sm uppercase">
            <tr>
                <th class="px-4 py-2 border-b">Nombre</th>
                <th class="px-4 py-2 border-b">Operaciones</th>
            </tr>
        </thead>
        <tbody class="text-gray-700">
            @foreach($categoria as $categorias)
            <tr class="hover:bg-gray-50">
                <td class="px-4 py-2 border-b">{{ $categorias->nombre }}</td>
                <td class="px-4 py-2 border-b">
                    <a href="{{ route('categoria.edit', $categorias->id) }}"
                        class="bg-yellow-400 hover:bg-yellow-500 text-white font-semibold py-1 px-3 rounded text-sm shadow">
                        Editar
                    </a>

                    <form action="{{ route('categoria.destroy', $categorias->id) }}" method="POST" class="inline-block" onsubmit="return confirm('¿Estás seguro de eliminar esta categoría?');">
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
@endsection