@extends('plantillas.plantilla')

@section('titulo')
Categorias
@endsection

@section('cabecera')
<h1 class="text-xl text-center text-purple-900 font-bold dark:text-white m-5"> -- GESTIÓN DE CATEGORÍAS -- </h1>
@endsection

@section('contenido')
<div class="w-3/4 m-auto">

    <div class="mb-3 text-right">
        <a href="{{route('categories.create')}}" class="m-3 text-purple-800 font-semibold font-madium px-4 py-1 shadow rounded-xl bg-purple-300">
            añadir
        </a>
    </div>

    <div class="overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-purple-800 uppercase bg-purple-300 dark:bg-purple-700 dark:text-white">
                <tr>
                    <th scope="col" class="font-bold px-6 py-3 w-1/4">
                        CATEGORÍA
                    </th>
                    <th scope="col" class="font-bold px-6 py-3 w-1/3">
                        COLOR
                    </th>
                    <th scope="col" class="font-bold px-6 py-3">
                        ACCIONES
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $item)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                        {{$item -> nombre}}
                    </td>

                    <td class="px-6 py-4">
                        <div class="rounded-xl p-1 text-center text-white" style="background-color: {{$item -> color}};">
                            {{$item -> color}}
                        </div>
                    </td>
                    
                    <td class="px-6 py-4">
                        <form action="{{route('categories.destroy', $item)}}" method="POST">
                        @csrf
                        @method('DELETE')
                            <a href="{{route('categories.edit', $item)}}" class="mr-4 font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                editar
                            </a>

                            <button type="submit" class="mr-4 font-medium text-red-600 dark:text-red-500 hover:underline">
                                borrar
                            </button>

                            <a href="{{route('products.show', $item -> id)}}" class="font-medium text-purple-600 dark:text-purple-500 hover:underline">
                                mostrar productos
                            </a>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('alertas')
 <x-alerta />
@endsection