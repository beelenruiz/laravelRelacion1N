@extends('plantillas.plantilla')

@section('titulo')
Productos
@endsection

@section('cabecera')
<h1 class="text-xl text-center text-purple-900 font-bold dark:text-white m-5"> -- GESTIÓN DE PRODUCTOS -- </h1>
@endsection

@section('contenido')
<div class="m-auto">

    <div class="mb-3 text-right">
        <a href="{{route('products.create')}}" class="m-3 text-purple-800 font-semibold font-madium px-4 py-1 shadow rounded-xl bg-purple-300">
            añadir
        </a>
    </div>

    <div class="mb-10 bg-purple-300 dark:bg-purple-700 dark:text-white relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-purple-800 uppercase bg-purple-300 dark:bg-purple-700 dark:text-white">
                <tr>
                    <th scope="col" class="px-16 py-3">
                        <span class="sr-only">Image</span>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        NOMBRE
                    </th>
                    <th scope="col" class="px-6 py-3">
                        DESCRIPCIÓN
                    </th>
                    <th scope="col" class="px-6 py-3">
                        STOCK
                    </th>
                    <th scope="col" class="px-6 py-3">
                        CATEGORÍA
                    </th>
                    <th scope="col" class="px-6 py-3">
                        ACCIONES
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $item)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="p-4 w-5">
                        <img src="{{Storage::url($item -> imagen)}}" alt="imagen">
                    </td>
                    
                    <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                        {{$item -> nombre}}
                    </td>

                    <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                        {{$item -> descripcion}}
                    </td>

                    <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                        {{$item -> stock}}
                    </td>

                    <td class="px-6 py-4">
                        <div class="rounded-xl p-1 text-center text-white" style="background-color: {{$item -> category -> color}};">
                            {{$item -> category -> nombre}}
                        </div>
                    </td>

                    <td class="px-6 py-4">
                        <form action="{{route('products.destroy', $item)}}" method="POST">
                        @csrf
                        @method('DELETE')
                            <a href="{{route('products.edit', $item)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                editar
                            </a>

                            <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline">
                                borrar
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-2 mb-7 m-3">
            {{$productos->links()}}
        </div>
    </div>
@endsection

@section('alertas')
 <x-alerta />
@endsection