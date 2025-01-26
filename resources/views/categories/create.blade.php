@extends('plantillas.plantilla')

@section('titulo')
Nueva Categoría
@endsection

@section('cabecera')
<h1 class="text-xl text-center text-purple-900 font-bold dark:text-white m-5"> -- CREAR UNA CATEGORÍA -- </h1>
@endsection

@section('contenido')
<div class="overflow-x-auto shadow rounded-lg w-2/4 m-auto bg-purple-200 p-5">
    <form class="mx-auto" action="{{route('categories.store')}}" method="POST">
    @csrf

        <div class="mb-5">
            <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 ">Nombre de la categoría</label>
            <input value="{{old('nombre')}}" type="text" id="nombre" name="nombre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
            <x-error for="nombre" />
        </div>

        <div class="mb-5">
            <label for="color" class="block mb-2 text-sm font-medium text-gray-900 ">Color</label>
            <input value="{{old('color')}}" type="color" id="color" name="color" class="h-14 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
            <x-error for="color" />
        </div>

        <div class="text-right">
            <button type="reset" class="ml-3 text-purple-800 font-semibold font-madium px-4 py-1 shadow rounded-xl bg-purple-300">
                reset
            </button>

            <a href="{{route('categories.index')}}" class="ml-3 text-purple-800 font-semibold font-madium px-4 py-1 shadow rounded-xl bg-purple-300">
                cancelar
            </a>

            <button type="submit" class="ml-3 mr-3 text-purple-800 font-semibold font-madium px-4 py-1 shadow rounded-xl bg-purple-300">
                crear
            </button>
        </div>
    </form>
</div>
@endsection